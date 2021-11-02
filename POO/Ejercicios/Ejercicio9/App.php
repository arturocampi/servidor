<?php

class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }

        try {
            $this->$method();
        } catch (Throwable $th) {
            if (method_exists($this, $method)) {
                header("HTTP/1.0 500 Internal Server Error");
                return http_response_code(500);
                echo "Error en el servidor";
            } else {
                header("HTTP/1.0 404 Not Found");
                echo "No encontrado";
            }
        } finally {
            echo "<pre>";
        }
    }

    public function login()
    {
        include('views/login.php');
    }

    public function auth()
    {
        setcookie('user', $_POST['user'], time() + 3600 * 24);
        setcookie('password', $_POST['password'], time() + 3600 * 24);
        if ($_POST['user'] == 'arthur' && $_POST['password'] == '1234') {
            header('location:?method=home');
        } else {
            echo "Credenciales incorrectas";
            header('location:views/login.php');
        }
    }

    public function home()
    {
        if (isset($_COOKIE['list'])) {
            $lista = json_decode($_COOKIE['list']);
        }else {
            $lista = [];
        }
        include('views/home.php');
    }

    public function new()
    {
        $new = $_POST['new'];
        if (isset($_COOKIE['list'])) {
            $lista = json_decode($_COOKIE['list']);
        } else {
            $lista = [];
        }
        $lista[] = $new;
        setcookie('list', json_encode($lista), time() + 3600 * 24);
        header('location:?method=home');
    }

    public function empty()
    {
        setcookie('list', '', time() + 1);
        header('location:?method=home');
    }

    public function delete(){
        if (isset($_COOKIE['list'])) {
            $lista = json_decode($_COOKIE['list']);
            $id = $_GET['id'];
            unset($lista[$id]);
            setcookie('list', json_encode($lista), time() + 3600 * 24);
        } 
        include('views/home.php');
    }
    
    public function close()
    {
      setcookie('user', $_POST['user'], time() - 3600 * 24);
      setcookie('password', $_POST['password'], time() - 3600 * 24);
      setcookie('list', '', time() + 1);
      header('location:index.php');
    }
}
