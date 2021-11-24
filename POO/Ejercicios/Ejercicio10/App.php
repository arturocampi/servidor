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

    public function home(){
        if(isset($_COOKIE['color'])){
            include('views/home.php');
        }else{
            header('location:?method=colores');
        }
    }

    public function colores(){
        include('views/colores.php');
    }

    public function cambio(){
        $color = $_GET['color'];
        setcookie('color', $color, time() + 3600 * 24);
        header('location:?method=home');
    }
}