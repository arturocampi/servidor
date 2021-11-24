<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1{
            color: red;
        }
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
        }
        table {
            width: 80%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<h1>Lista de usuarios</h1>
<table class="table table-striped table-hover">
<tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>F. nacimiento</th>
</tr>

<?php foreach ($users as $key => $user) { ?>
    <tr>
    <td><?php echo $user->name ?></td>
    <td><?php echo $user->surname ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->birthdate ? $user->birthdate->format('d-m-Y') : 'nonato' ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>
