<?php
include('/php/acceso_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br><br>
    <header class="header">Iniciar Sesi&oacute;n</header>
    <div class="login-box">
        <h1>Login Here</h1>
        <form id='form-login' action='/php/login.php' method='POST'>

            <!-- .. USERNAME   ..--> 
            <label for='username'>Username</label>
            <input type='text' name='txtusuario' id='usuario' placeholder='Enter Username' autofocus=' '>
            
            <!-- .. PASSWORD   ..--> 
            <label for='password'>Password</label>
            <input type='password' name='txtpassword' id='password' placeholder='Enter Password'>

            <input type='submit' id='conectar' name='btnconectar' value='Log In'>

            <br><br>
            <a href='/php/recuperar_clave.php'>Lost your password?</a>
            <a class='derecha' href='/php/registrarse.php'>Don't have an account?</a>
        </form>
    </div>
</body>
</html>