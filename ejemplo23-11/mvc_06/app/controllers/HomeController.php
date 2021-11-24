<?php
namespace App\Controllers;

class HomeController
{

    public function index()
    {
        // echo "<p>En Index()</p>";
        require "app/views/home.php";
    }
}
