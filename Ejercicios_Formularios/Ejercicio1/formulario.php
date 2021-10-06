<!--
    El protocolo HTTP define 8 verbos para establecer la comunicación cliente -servidor
        - GET se usa para solicitar una página web
            - Se pueden pasar parámetros al servidor en la cabecera
            - Los datos se ven en la barra del navegador
            - ?: indicador de que empieza la lista de parámetros
            - nompram1 = valor1 & nompram2 = valor2  
        - POST se usa para enviar formularios al servidor
            - Los parámetros no aparecen en la URL
            - Envía los datos en el cuerpo de la petición HTTP
-->

<!--
    Los formularios son la forma más habitual de enviar datos al servidor
        - Atributo action
            Especifica la ruta del script al que se enviará el formulario
        - Atributo metodo
            Especifica el método HTTP 
        - Los datos a rellenar o inputs
            Por ejemplo de tipo text, password, hidden y submit
-->    
<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formularios</title>
</head><body>
    <h2>Nuestro primer formulario</h2>
    <form method="GET" action="formularioAction.php">
        <label>Título</label><input type="text" value="" name="titulo"><br>
        <label>Autor</label><input type="text" value="" name="autor"><br>
        <label>Editorial</label><input type="text" value="" name="editorial"><br>
        <label>Páginas</label><input type="text" value="pordefecto" name="paginas"><br>
        <input type="submit" value="enviar">
    </form>
</body></html>