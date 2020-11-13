<?php 

include("conexion.php");

$id = $_GET['id'];

// borra por ID, ese ID, viene por método GET desde listar.php
$query = "DELETE FROM datos WHERE ID=$id" ;
$resultado = mysqli_query($conexion, $query);
header ("location: listar.php");

 ?>