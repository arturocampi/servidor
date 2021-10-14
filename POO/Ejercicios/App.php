<?php

class App
{

private $array = array();

  public function numerosPrimos(){
    for ($i=2; $i < 10000; $i++) { 
        if ($i) {
            # code...
        }
    }
  }

  public function run()
  {
    echo "Moneda al aire... <hr>";
    $moneda = rand(0,1);
    // if ($moneda == 1) {
    if ($moneda) {
      echo "<h3>Ha salido cara:  </h3> <br>";
      $this->index();
    } else {
      echo "<h3> Ha salido cruz: </h3> <br>";
      $this->login();
    }
  }

  public function index()
  {
    echo "Estamos en el index<br>";
    include('views/index.php');
  }
  
  public function login()
  {
    echo "Estamos en login <br>";
    include('views/form.php');
  }  
}