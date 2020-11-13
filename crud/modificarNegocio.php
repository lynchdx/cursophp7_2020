<?php 

$nombre= $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$id = $_POST['id'];

include("conexion.php");

$query = "UPDATE datos SET NOMBRE='$nombre', APELLIDO='$apellido', EDAD='$edad', CELULAR='$celular' WHERE ID=$id ";

$resultado = mysqli_query($conexion, $query);

header("location: listar.php");

 ?>