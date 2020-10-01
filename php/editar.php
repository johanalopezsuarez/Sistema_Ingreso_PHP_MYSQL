<?php
include('acceso_db.php');
    if (isset($_POST['btnsave'])) 
    {
        $queEmp = "UPDATE usuarios SET email = '$_POST[txtemail]' where codigo = '$_POST[codigo]'";
        $resEmp = mysqli_query($db, $queEmp) or die(mysqli_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edici&oacute;n de Usuario</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <div>
        <a href='../index.php'></a>
    </div>
    <div>
        <?php
        header('location:v_lista.php');
        ?>  
     
        <input type="button" value='Aplicaci&oacute;n' onclick="window.location='aplicacion.php';">
    </div>
</body>
</html>