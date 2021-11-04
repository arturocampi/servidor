<?php

class App
{
    public function run()
    {
        session_start();
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
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        if ($_SESSION['user'] == 'arthur' && $_SESSION['password'] == '1234') {
            header('location:?method=home');
        } else {
            echo "Credenciales incorrectas";
            header('location:views/login.php');
        }
    }

    public function home()
    {
        if (isset($_SESSION['list'])) {
            $lista = $_SESSION['list'];
        } else {
            $lista = [];
        }
        include('views/home.php');
    }

    public function new()
    {
        $new = $_POST['new'];
        if (isset($_SESSION['list'])) {
            $lista = $_SESSION['list'];
        } else {
            $lista = [];
        }
        $lista[] = $new;
        $_SESSION['list'] = $lista;
        header('location:?method=home');
    }

    public function empty()
    {
        unset($_SESSION['list']);
        header('location:?method=home');
    }

    public function delete()
    {
        if (isset($_SESSION['list'])) {
            $id = $_GET['id'];
            unset($_SESSION['list'][$id]);
        }
        include('views/home.php');
    }

    public function close()
    {
        session_destroy();
        header('location:index.php');
    }
}
