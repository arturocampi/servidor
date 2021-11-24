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
        $this->$method();
    }

    public function reload()
    {
        header('location:?method=home');
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
<<<<<<< HEAD
        session_start();
        $_SESSION['color'] = $_GET['color'];
        header('location:?method=home');
=======
        $_SESSION['color'] = $_GET['color'];
        $this->reload();
>>>>>>> 8712d98ca81dd2acc3eae3ce3685eb57701e7275
    }
}
