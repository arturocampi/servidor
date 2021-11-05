<?php

class App
{
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }

    try {
      $this->$method();
    } catch (Throwable $th) {
      if (method_exists($this, $method)) {
        header("HTTP/1.0 500 Internal Server Error");
        return http_response_code(500);
        echo "Error en el servidor";
      } else {
        header("HTTP/1.0 404 Not Found");
        echo "No encontrado";
      }
    } finally {
      echo "<pre>";
      print_r($th);
    }
  }

  public function index()
  {
    // echo "Estamos en el index<br>";
    include('views/index.php');
  }

  public function fibonacci()
  {
    $a = 0;
    $b = 1;
    $c = 0;
    do {
      $c = $a + $b;
      echo $c . "<br>";
      $a = $b;
      $b = $c;
    } while ($c < 999999);
  }

  public function potencia()
  {
    for ($i = 0; $i < 25; $i++) {
      echo "2^$i = " . pow(2, $i) . "<br>";
    }
  }

  public function factorial()
  {
    $num = 1;
    $resultado = 1;
    $contador = 0;
    while ($resultado < 100000) {
      $resultado = $resultado * $num;
      $contador++;
      $num++;
    }
    echo "El número factorial de " . $contador . " es igual a " . $resultado;
  }

  public function primo()
  {
    $num = 1;
    $cadenaPrimos = '';
    for ($i = 2; $i < 5000; $i++) {
      if ($num % $i == 0) {
        $cadenaPrimos = $cadenaPrimos . $num . ', ';
      }
      $num++;
    }
    echo "Los números primos son: <br>" . $cadenaPrimos;
  }
}
