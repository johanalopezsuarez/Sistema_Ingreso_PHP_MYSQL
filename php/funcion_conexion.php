<?php
function _dbConnect()
{
    global $hostName_conf;
    global $userName_conf;
    global $password_conf;
    global $dbName_conf;

    $dbh = mysqli_connect($hostName_conf, $userName_conf, $password_conf, $dbName_conf);
    if (mysqli_connect_errno()) die('No se pudo establecer la conexion');
    return $dbh;
}
?>