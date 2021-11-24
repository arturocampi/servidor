<?php
namespace App\Controllers;

use App\Models\User;
use Dompdf\Dompdf;

class UserController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $users = User::all();
        //pasar a la vista
        require('app/views/user/index.php');
    }
    
    public function create()
    {
        require 'app/views/user/create.php';
    }
    
    public function store()
    {
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();
        header('Location:'.PATH.'/user');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $user = User::find($id);
        // var_dump($user);
        // exit();
        require('app/views/user/show.php');        
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        require 'app/views/user/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $user = User::find($id);
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->save();
        header('Location:'.PATH.'/user');
    }
    
    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete();
        header('Location:'.PATH.'/user');
    }
    
    public function pdf()
    {
        //iniciar buffer, para construir un response
        ob_start();
        $users = User::all();
        require_once ('app/views/user/pdf.php');
        // Volcamos el contenido del buffer
        // el response ya no va al navegador, va a $html
        $html = ob_get_clean();
        
        $dompdf = new DOMPDF();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("usuarios.pdf", array("Attachment"=>0));
    }
    public function pdfsimple()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream();        
    }
}
