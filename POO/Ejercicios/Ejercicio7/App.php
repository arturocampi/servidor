<?php

class App
{
    public function run()
    {
        #if (isset($_GET['method'])) {
        #    $method = $_GET['method'];
        #} else {
       #     require('views/index.php');
        #}
        
        if (isset($_GET['fibonacci'])) {
            $method = $_GET['fibonacci'];
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

    public function espartaco()
    {
        $a = 0;
        $b = 1;
        $c = 0;
        for ($i = 0; $i < 50; $i++) {
            $a + $b = $c;
            echo '$c';
            $b = $a;
            $c = $b;
        }
    }
}
