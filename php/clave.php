<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class='header'><a class='boton-inicio' href='../index.php'>Inicio</a></header>
<?php
include('acceso_db.php');
if (isset($_POST['btnenviar'])) 
{
    if ($_POST['txtemail'] != "") 
    {
        $queEmp = "SELECT email, clave from usuarios where email = '$_POST[txtemail]'";
        $resEmp =  mysqli_query($db, $queEmp) or die(mysqli_error());
        $rowEmp = mysqli_num_rows($resEmp);

        while ($rowEmp = mysqli_fetch_array($resEmp)) 
        {
            $email = $_POST['txtemail'];
            $pass = $rowEmp['clave'];
        }
        $denombre = "Administrador del Sistema";
        $deemail = "johana_ls_99@hotmail.com";
        $sfrom = "johana_ls_99@hotmail.com";
        $sBCC = "johana_ls_99@hotmail.com";
        $sdestinatario = "$email";
        $ssubject = "Datos de su cuenta en el sistema";
        $shtml = "Estimado la presente es para comunicarle su Login y Password para ingresar al sistema después de haber extraviado el método de acceso:";
        $encabezados = "MIME-Version: 1.0\n";
        $encabezados = "Content-type: text/thml; charset=iso-8859-1\n";
        $encabezados = "From: $denombre <$deemail>\n";
        $encabezados = "X-Sender: <$sfrom>\n";
        $encabezados = "BCC: <$sBCC>\n";
        $encabezados = "X-Mailer: PHP\n";
        $encabezados = "X-Priority: 1\n";
        $encabezados = "Return-Path: <$sfrom\n";
        mail($sdestinatario,$ssubject,$shtml,$encabezados);

        echo ("</br></br>");
        echo ("<table><tr><td class='texto'>El Login y Password de tu cuenta ha sido enviado al siguiente email: $email</td></tr>");
        echo ("<tr><td class='texto'>verifica tu email y regresa al inicio para volver a hacer el login.</td></tr></table>");
    }
}
?>
</body>
</html>

