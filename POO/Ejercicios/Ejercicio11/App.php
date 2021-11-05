<?php

class App
{
    public function run()
    {
        session_start();
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
        $this->$method();
    }

    public function reload()
    {
        $this->reload();
    }

    public function login()
    {
        include('views/login.php');
    }

    public function auth()
    {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        if ($_SESSION['user'] == 'arthur' && $_SESSION['password'] == '1234') {
            $this->reload();
        } else {
            echo "Credenciales incorrectas";
            header('location:views/login.php');
        }
    }

    public function home()
    {
        if (isset($_SESSION['list'])) {
            $lista = $_SESSION['list'];
        } else {
            $lista = [];
        }
        include('views/home.php');
    }

    public function new()
    {
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
        unset($_SESSION['list']);
        $this->reload();
    }

    public function delete()
    {
        if (isset($_SESSION['list'])) {
            $id = $_GET['id'];
            unset($_SESSION['list'][$id]);
        }
        include('views/home.php');
    }

    public function close()
    {
        session_destroy();
        header('location:index.php');
    }
}
