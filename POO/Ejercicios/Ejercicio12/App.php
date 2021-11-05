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
        $this->reload();
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
        $this->reload();
    }
}
