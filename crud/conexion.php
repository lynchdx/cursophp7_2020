<?php 

//conexion con base de datos cliente.

$host = "localhost";
$user = "root";
$pass = "";
$db = "cliente";

//esta variable se usará cada vez que se necesite hacer una query o algo con la base de datos.
$conexion = mysqli_connect($host, $user, $pass, $db);


mysqli_set_charset($conexion, "utf8");





 ?>