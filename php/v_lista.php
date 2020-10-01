<?php
include('acceso_db.php');
$pagact = 0;
if (isset($_GET['pagina']))
{
    $pagact = (int)$_GET['pagina'];
}

if ($pagact < 1)
{
    $pagact = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista_Lista</title>
    <link rel="stylesheet" href="../css/style-table.css">
</head>
<body>
    <header class='header'><a class='boton-inicio' href='../index.php'>Inicio</a></header>
    <div>
        <br><br>
        <h1>Listado de Usuarios</h1>
    </div>
    <div>
        <br><br>
        <?php
        $queEmp = "SELECT count(*) as total from usuarios";
        $resEmp = mysqli_query($db, $queEmp) or die(mysqli_error());
        $fila = $resEmp->fetch_assoc();
        $totEmp = $fila['total'];

        $cantpag = 2;
        $pagtotales = ceil($totEmp/$cantpag);

        $inicio = ($pagact - 1) * $cantpag;

        $queEmp = "SELECT codigo, nombre, apellidos, email, usuario from usuarios limit $inicio, $cantpag";
        $resEmp = mysqli_query($db, $queEmp) or die (mysqli_error());
        echo "Aproximadamente:"." ".$totEmp." "."resultados.";
        echo "</br>";
        echo "
            <table class='table-listado' id='datos'>
                <tr>
                    <td><strong> Codigo </strong></td>
                    <td><strong> Nombre </strong></td>
                    <td><strong> Apellidos </strong></td>
                    <td><strong> Email </strong></td>
                    <td><strong> Usuario </strong></td>
                    <td><strong> Editar </strong></td>
                    <td><strong> Eliminar </strong></td>
                </tr>
        ";
        while ($rowEmp = mysqli_fetch_array($resEmp))
        {
            echo "
                <tr>
                    <td><strong>".$rowEmp['codigo']."</strong></td>
                    <td>".$rowEmp['nombre']."</td>
                    <td>".$rowEmp['apellidos']."</td>
                    <td>".$rowEmp['email']."</td>
                    <td>".$rowEmp['usuario']."</td>
                    <td><a class='enlace' href='form_editar.php?codigo=$rowEmp[codigo]'>Editar</a></td>
                    <td><a class='enlace' href='form_eliminar.php?codigo=$rowEmp[codigo]'>Eliminar</a></td>
                <tr>
            ";
        }
        echo "</table>";
        echo "</br>";

        for ($i=1; $i <= $pagtotales; $i++) 
        { 
            if ($i == $pagact)
            {
                echo '<span class="pagina-actual">'.$i.'</span>';
            }elseif ($i == 1 || $i == $pagtotales || ($i >= $pagact - 2 && $i <= $pagact + 2)) 
                {
                    echo '<a href="?pagina='.$i.'" class="pagina">'.$i.'</a>';
                }
            
        }
        ?>
        <br><br>
    </div>
</body>
</html>