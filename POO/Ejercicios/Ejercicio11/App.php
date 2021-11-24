<?php

class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
<<<<<<< HEAD
            $this->$method();
=======
        $this->$method();
    }

    public function reload()
    {
        $this->reload();
>>>>>>> 8712d98ca81dd2acc3eae3ce3685eb57701e7275
    }

    public function login()
    {
        include('views/login.php');
    }

    public function auth()
    {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        if ($_SESSION['user'] == 'arthur' && $_SESSION['password'] == '1234') {
            $this->reload();
        } else {
            echo "Credenciales incorrectas";
            include('views/login.php');
        }
        $this->reload();
    }

    public function reload()
    {
        header('location:?method=home'); 
    }

    public function home()
    {
        session_start();
        if (isset($_SESSION['list'])) {
            $lista = $_SESSION['list'];
        } else {
            $lista = [];
        }
        include('views/home.php');
    }

    public function new()
    {
        session_start();
        $new = $_POST['new'];
        if (isset($_SESSION['list'])) {
            $lista = $_SESSION['list'];
        } else {
            $lista = [];
        }
        $lista[] = $new;
        $_SESSION['list'] = $lista;
        $this->reload();
    }

    public function empty()
    {
        session_start();
        unset($_SESSION['list']);
        $this->reload();
    }

    public function delete()
    {
        session_start();
        if (isset($_SESSION['list'])) {
            $id = $_GET['id'];
            unset($_SESSION['list'][$id]);
        }
        $this->reload();
    }

    public function close()
    {
        session_destroy();
        header('location:index.php');
    }
}
