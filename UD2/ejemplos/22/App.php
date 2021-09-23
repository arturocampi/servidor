<?php

class App
{
  public function __construct()
  {
    session_start();    
  }
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
  
    $this->$method();      
  }
  public function index()
  {
    include('views/index.php');
  }

  public function guardar1()
  {
    $name = "Juan Ramón";
    $_SESSION['name'] = $name;
    header('Location: index.php');
  }

  public function eliminar()
  {
    unset($_SESSION['name']);
    header('Location: index.php');    
  }

  public function guardar2()
  {
    $colores= array('rojo', 'verde', 'azul', 'amarillo');
    $_SESSION['colores'] = $colores;    
    header('Location: index.php');
  }

  public function eliminar2()
  {
    unset($_SESSION['colores'][1]);
    header('Location: index.php');
  }

  public function cerrar()
  {
    session_destroy();
    header('Location: index.php');    
  }

  public function selectivo()
  {
    $id = $_GET['id'];
    unset($_SESSION['colores'][$id]);
    header('Location: index.php');
  }
}
