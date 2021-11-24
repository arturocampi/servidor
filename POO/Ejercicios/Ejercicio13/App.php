<?php

class App
{

    public function run()
    {
<<<<<<< HEAD


    }

=======
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }

    public function reload(){
        header('Location:?method=home');
    }

    public function home(){
        include('views/home.php');
    }

    public function new(){
        session_start();
        $_SESSION['list'];
    }
>>>>>>> 8712d98ca81dd2acc3eae3ce3685eb57701e7275
}
