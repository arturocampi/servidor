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
  
    $this->$method();      
  }

  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');
  }

  public function auth()
  {
    //recoger datos POST
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }
    //echo "xxxxx"; //al cuerpo del response. Ya no puedo usar header, ningun setcookie,....
    //guardar en cookie
    setcookie('name', $name, time() + 60*60*2);
    setcookie('password', $password, time() + 60*60*2);
    //reenviar a "home"
    //le dice al navegador que vaya a otro sitio:
    //http://ejercicios.local/ejemplos/20/index.php?method=home
    header('Location: index.php?method=home');
  }
  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      // $deseos = array();
      $deseos = [];
    }
    include('views/home.php');
  }

  public function new()
  {
    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: index.php?method=home');
  }

  public function delete()
  {
    // echo "<pre>";
    // print_r($_GET);
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: index.php?method=home');
  }

  public function empty()
  {
    setcookie('deseos', '',  1);
    // setcookie('deseos', '', time() - 1);
    header('Location: index.php?method=home');    
  }

  public function close()
  {
    setcookie('deseos', '',  1);
    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');
  }
}
