<?php
session_start();
if ($_SESSION['login'] != 'ok') 
{
    header('location:../index.php');
    exit();
}
?>
