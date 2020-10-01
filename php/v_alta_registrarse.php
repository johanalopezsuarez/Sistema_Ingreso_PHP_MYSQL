<?php
include('acceso_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>v_alta_registrarse</title>
</head>
<body>
    <?php
        if (isset($_POST['btncheckin']))
        {
            function validar_email($txtemail)
            {
                if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $txtemail)) 
                {
                    return true;
                }else{
                    return false;
                     }
            }
        $sin_espacios = count_chars($_POST['txtname'], 1);
        if (!empty($sin_espacios[32])) 
        {
            echo "El campo <em>name</em> contiene espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
        }elseif (empty($_POST['txtuser']))
             {
                echo "Ingresar nombre. <a href='javascript:history.back();'>Reintentar</a>";
             }elseif (empty($_POST['txtpassword']))
                 {
                    echo "Ingresar password. <a href='javascript:history.back();'>Reintentar</a>";
                 }elseif ($_POST['txtpassword'] != $_POST['txtrepeatpassword'])
                    {
                        echo "Las contraseñas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
                    }elseif (!validar_email($_POST['txtemail']))
                        {
                            echo "El email no es valido. <a href='javascript:history.back();'>Reintentar</a>";
                        }else{
                            $_POST['txtname'] = mysql_real_escape_string($_POST['txtname']);
                            $_POST['txtsurname'] = mysql_real_escape_string($_POST['txtsurname']);
                            $_POST['txtemail'] = mysql_real_escape_string($_POST['txtemail']);
                            $_POST['txtuser'] = mysql_real_escape_string($_POST['txtuser']);
                            $_POST['txtpassword'] = mysql_real_escape_string($_POST['txtpassword']);
                            $_POST['txtrepeatpassword'] = mysql_real_escape_string($_POST['txtrepeatpassword']);

                            $queEmp = "SELECT nombre, apellidos from usuarios where usuario = '$_POST[txtuser]'";
                            $queEmp = mysqli_query($db, $queEmp) or die(mysqli_error());

                            if (mysqli_num_rows($resEmp) > 0)
                            {
                               echo "El nombre de usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
                            }else{
                                $_POST['txtpassword'] = md5($_POST['txtpassword']);
                                $queEmp = "INSERT INTO usuarios (nombre, apellidos, email, usuario, clave)
                                          VALUES ('$_POST[txtname]', '$_POST[txtsurname]', '$_POST[txtemail]', '$_POST[txtuser]', '$_POST[txtpassword]')";
                                $resEmp = mysqli_query($db, $queEmp) or die(mysqli_error());
                                if ($resEmp) 
                                {
                                    header('location:lista.php');
                                }else{
                                    echo "Ha ocurrido un error y no se registraron los datos.";
                                    }
                                }
                              }
    }else{
        header('location:registrarse.php');
        }
    ?>
</body>
</html>