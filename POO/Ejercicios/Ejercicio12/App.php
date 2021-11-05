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
        $this->$method();
    }

    public function reload()
    {
        header('location:?method=home');
    }

    public function home()
    {
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
        $_SESSION['color'] = $_GET['color'];
        $this->reload();
    }
}
