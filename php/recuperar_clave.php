<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Clave</title>
    <link rel="stylesheet" href="../css/recuperar.css">
</head>
<body>
    <div class='encabezado'>
    <header class='header'><a class='boton-inicio' href='../index.php'>Inicio</a></header>
    </div>
   
    <div class="email-box">
        <h1>Recuperar Contraseña</h1>
        <form name='recuperar' id='recuperar' action='clave.php' method='POST'>
            <p>Ingrese el email con el que se registro para que le enviemos su password.</p>
            
            <!-- .. EMAIL   ..--> 
            <label for='email'>Email</label>
            <input type='text' name='txtemail' id='email' placeholder='Enter email' value='<?php
                if (isset($_POST['txtemail'])) {echo $_POST['txtemail'];}?>'>
            
            <input type="submit" id='enviar' name='btnenviar' value='Enviar' class='boton'>
        </form>
    </div>
</body>
</html>