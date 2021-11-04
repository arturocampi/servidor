<?php

class App
{

    public function run()
    {
        session_start();
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
        if (isset($_SESSION['color'])) {
            header('location:views/home.php');
        } else {
            header('location:?method=colores');
        }
    }

    public function colores()
    {
        header('location:views/colores.php');
    }

    public function cambio()
    {
        $color = $_GET['color'];
        $_SESSION['color'] = $color;
        header('location:?method=home');
    }
}
