<?php
include('acceso_db.php');
if (isset($_GET['codigo']))
{
    $queEmp = "SELECT * from usuarios where codigo = '$_GET[codigo]'";
    $resEmp = mysqli_query($db, $queEmp) or die(mysqli_error());
    $rowEmp = mysqli_fetch_array($resEmp);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Editar</title>
    <link rel="stylesheet" href="../css/style_editar.css">
</head>
<body>
    <header class='header'><a class='boton-inicio' href='../index.php'>Inicio</a></header>
    <div class='login-box'>
        <h2>Modificar Email</h2>
        <form name= 'datos' id='datos' action="editar.php" method='POST'>
            <input type='hidden' name='codigo' value='<?php echo $_GET['codigo'];?>'>

            <!-- .. NAME   ..--> 
            <label for="name">Nombre</label>
            <input type="text" name='txtname' id='name' placeholder='Enter name' disabled = 'disabled' value='<?php echo $rowEmp['nombre'];?>'>
           
            <!-- .. SURNAME  ..--> 
            <label for="surname">Surname</label>
            <input type="text" name='txtsurname' id='surname' placeholder='Enter Surname' disabled='disabled' value='<?php echo $rowEmp['apellidos'];?>'>
             
            <!-- .. EMAIL UNICO CAMPO A MODIFICAR ..--> 
            <label for="email">Email a Modificar</label>
            <input type="text" name='txtemail' id='email' autofocus='' value='<?php echo $rowEmp['email'];?>'>
            
            <!-- .. USER  ..--> 
            <label for="user">User</label>
            <input type="text" name='txtuser' id='user' placeholder='Enter User' disabled='disabled' value='<?php echo $rowEmp['usuario'];?>'>

            <input type="submit" id='save' name='btnsave' value='Save' class='boton'>
        </form>
    </div>
</body>
</html>
