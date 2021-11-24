<?php
namespace Core;

/*
* Composer y autoload
*   Composer es un gestor de dependencias en proyectos php
*   Permite definir las librerías de las que depende un proyecto
*   Controlar las versiones y mantener las mismas en diferentes instalaciones
*   Permite autocargar todas las clases sin usar require
*
*   1) Instalación:
*       >> curl -sS https://getcomposer.org/installer | php
*       >> sudo mv composer.phar /usr/local/bin/composer
*
*   2) Iniciamos el proyecto:
*       >> cd project_directory
*       >> composer init //crea un fichero llamado composer.json
*           -> El proyecto y sus dependencias se define en composer.json
*               - En require definimos librerías a usar por el proyecto
*               - En autoload definimos los namespaces que vamos a usar y los directorios donde está cada uno de ellos
*
*   3) Debemos ejecutar en el proyecto:
*       >> composer dump-autoload
*           -> crea unos scripts dentro de vendor/composer
*
*   4) Después debemos añadir un único require, en index.php
*
*   5) Cada clase que añadas al proyecto require ejecutar de nuevo composer dump-autoload
*
*   6) Para usar librerías de terceros también usamos composer
*       Podemos editar el composer.json o ejecutar composer require nombrelibreria
*       >> composer require 'dompdf/dompdf'
*/

class App
{

    function __construct()
    {
        // echo "Clase App<br>";

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        // vamos a usar la url de la siguiente manera:
        //   controlador/metodo/argumentos
        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }

        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            // require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }

        $controllerName = '\\App\\Controllers\\' . $controllerName;
        $controllerObject = new $controllerName;
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}
