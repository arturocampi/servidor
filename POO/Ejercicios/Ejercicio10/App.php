<?php

class App{

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

    public function home(){
        $dw = 0;
        if(isset($_COOKIE['color'])){
            include('home.php');
        }else{
            header('location:views/colores.php');
            setcookie('color', $dw, time() + 3600 * 24);
        }
        header('location:views/home.php');
    }

    public function colores(){

    }

    public function cambio(){

    }
}