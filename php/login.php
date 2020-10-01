<?php
session_start();
include('acceso_db.php');
$_SESSION['usuario'] = $_POST['txtusuario'];

if (isset($_POST['btnconectar'])) 
{
    if (empty($_POST['txtusuario']) || empty($_POST['txtpassword']))
    {
        echo "Faltan datos. <a href='javascript:history.back();Reintentar</a>";
    }else{
        $_POST['txtusuario'] = mysql_real_escape_string($_POST['txtusuario']);
        $_POST['txtpassword'] = mysql_real_escape_string($_POST['txtpassword']);

        //AES_ENCRYPT(password, 'llave');
        $_POST['txtpassword'] = md5($_POST['txtpassword']);
        
        $queEmp = "SELECT * from usuarios where usuario = '$_POST[txtusuario]' && clave = '$_POST[txtpassword]'";
        $resEmp = mysqli_query($db, $queEmp) or die(mysqli_error());
        $rowEmp = mysqli_fetch_object($resEmp);

            if ($rowEmp) 
            {
                $_SESSION['login'] = "ok";
                header('location:aplicacion.php');
            }else{
                header('location:../index.php?errorusuario=si');
            }
        }
}else{
    ?>
    Error, <a href='../index.php'>Reintentar</a>
    <?php
}
?>