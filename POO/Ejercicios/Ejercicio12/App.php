<?php

class App
{

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
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

    public function home()
    {
        session_start();
        if (isset($_SESSION['color'])) {
            include('views/home.php');
        } else {
            header('location:?method=colores');
        }
    }

    public function colores()
    {
        include('views/colores.php');
    }

    public function cambio()
    {
        session_start();
        $_SESSION['color'] = $_GET['color'];
        header('location:?method=home');
    }
}
