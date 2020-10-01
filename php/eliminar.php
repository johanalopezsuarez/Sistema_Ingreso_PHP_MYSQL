<?php
include('acceso_db.php');
    if (isset($_POST['btndelete']))
    {
        $queEmp = "DELETE from usuarios where codigo = '$_POST[codigo]'";
        $resEmp = mysqli_query($db, $queEmp) or die (mysqli_error());
        if ($resEmp)
        {
            header('location:v_lista.php');
        }
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
    
</body>
</html>
<?php
    header('location:v_lista.php');
    }
?>