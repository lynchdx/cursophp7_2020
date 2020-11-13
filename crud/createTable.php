<?php 

include("conexion.php");

$query = "CREATE TABLE datos (ID int NOT NULL AUTO_INCREMENT, NOMBRE varchar (15), APELLIDO varchar (15), EDAD int, CELULAR int, PRIMARY KEY(ID))";

//variable $conexion viene del include conexion.php, el que está compuesto por el string de conexión.
$resultado = mysqli_query($conexion, $query);



 ?>