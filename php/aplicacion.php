<?php
include('bloque_seguridad.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicaci&oacute;n</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class='principal'>    
        <h1>Bienvenido: <?php echo $_SESSION['usuario']?></h1>
        <br>
        <header class='header'><a class='boton-salir' href='salir.php'>Cerrar Sesi&oacute;n</a></header>
        <br><br><br>
            Aqui comienza nuestro programa.
    </div>
</body>
</html>