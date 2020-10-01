<?php
include('acceso_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href='../css/style_registro.css'>
</head>
<body>
        <header class='header'><a class='boton-inicio' href='../index.php'>Inicio</a></header>
        <div  class='login-box'>
            <?php include('v_form_registrarse.php') ?>
        </div>
</body>
</html>