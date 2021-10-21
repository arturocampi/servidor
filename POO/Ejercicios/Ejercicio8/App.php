<?php

class App{

    #a) login: muestra un formulario de login (usuario y contraseña).
    #b) auth: guarda el usuario y su contraseña en una cookie. Después reenvía la petición a home.
    #c) home: Muestra un saludo y un enlace para cerrar sesión.
    #d) logout: elimina las cookies (setcookie(...., time() - 1)) y reenvía a login.
    #e) Depura tu código. En login, comprueba que no hay ya un usuario. Si lo hay reenvía a home.

    public function run(){
        header('location:views/login.php');
    }

    public function login(){
        include('views/login.php');
    }

    public function auth(){
        header('location:views/index.php?method=home');
    }

    public function home(){
        include('views/home.php');
    }
}