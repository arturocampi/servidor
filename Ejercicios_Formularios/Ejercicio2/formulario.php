<?php
        if(isset($_GET) && !empty($_GET)){
            $error = $_GET['r'];
            if( $error == 'error' ) {
                echo '<p style="color:red;"> El campo nombre es obligatorio</p>';
            }
        }
    
?>

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formulario y procesamiento en un fichero</title>
</head><body>
    <h2>Formulario</h2>
    <form method="POST" action="formularioAction.php">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <input type="submit" value="enviar">
    </form>
    
    
</body></html>