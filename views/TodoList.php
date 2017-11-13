<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo 'Has iniciado sesion  ' . $_SESSION['usuario'] .'<br>';
}
?>

<a href="logout.php">Cerrar Sesion</a>
