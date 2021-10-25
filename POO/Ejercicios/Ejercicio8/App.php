<?php

class App
{

  #a) login: muestra un formulario de login (usuario y contraseña).
  #b) auth: guarda el usuario y su contraseña en una cookie. Después reenvía la petición a home.
  #c) home: Muestra un saludo y un enlace para cerrar sesión.
  #d) logout: elimina las cookies (setcookie(...., time() - 1)) y reenvía a login.
  #e) Depura tu código. En login, comprueba que no hay ya un usuario. Si lo hay reenvía a home.

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
    }
  }

  public function index()
  {
    header('location:views/login.php');
  }

  public function login()
  {
    include('views/login.php');
  }

  public function auth()
  {
    setcookie('user', $_POST['user'], time() + 3600 * 24);
    setcookie('password', $_POST['password'], time() + 3600 * 24);
    if ($_POST['user'] == 'arthur' && $_POST['password'] == '1234') {
      header('location:?method=home');
    } else {
      echo "Credenciales incorrectas";
      header('location:views/login.php');
    }
  }

  public function home()
  {
    header('location:views/home.php');
  }

  public function logout()
  {
    setcookie('user', $_POST['user'], time() - 3600 * 24);
    setcookie('password', $_POST['password'], time() - 3600 * 24);
    header('location:index.php');
  }
}
