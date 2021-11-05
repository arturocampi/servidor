<?php

class App{

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

    public function home(){
        if(isset($_COOKIE['color'])){
            header('location:views/home.php');
        }else{
            header('location:?method=colores');
        }
    }

    public function colores(){
        header('location:views/colores.php');
    }

    public function cambio(){
        $color = $_GET['color'];
        setcookie('color', $color, time() + 3600 * 24);
        $this->reload();
    }
}