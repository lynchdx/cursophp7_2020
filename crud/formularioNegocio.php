<?php 

include("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$celular = $_POST["celular"];


$query = "INSERT INTO datos (NOMBRE, APELLIDO, EDAD, CELULAR) VALUES ('$nombre','$apellido','$edad','$celular')";


$resultado = mysqli_query($conexion, $query);

header("location: formulariocliente.php")

 ?>