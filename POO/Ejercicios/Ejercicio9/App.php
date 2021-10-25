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
        include('views/home.php');
    }

    public function new()
    {
        $lista = array($_POST['new']);
        setcookie('list', json_encode($lista), time() + 3600 * 24);
        header('location:?method=home');
    }
}
