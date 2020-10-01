<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido no Seguro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class='principal'>
        <h1>Hasta pronto usuario: <?php echo $_SESSION['usuario']?></h1>
        <br><br>
        <header class='header'><a class='boton-inicio' href='../index.php'>Inicio</a></header>
    </div>
</body>
</html>