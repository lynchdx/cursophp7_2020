<?php 

include('conexion.php');


$id=$_GET['id'];

$query = "SELECT * FROM datos WHERE ID=$id";
$resultado = mysqli_query($conexion, $query);

 ?>



 <form method="POST" action="modificarNegocio.php">
 	<?php 

 	while ($fila = mysqli_fetch_array($resultado)) {
 		echo "Nombre: <input type='text'; name='nombre' value=' ".$fila['NOMBRE']."'><br> ";
 		echo "Apellido: <input type='text'; name='apellido' value=' ".$fila['APELLIDO']."'><br> ";
 		echo "Edad: <input type='text'; name='edad' value=' ".$fila['EDAD']."'><br> ";
 		echo "Celular: <input type='text'; name='celular' value=' ".$fila['CELULAR']."'><br> ";
 		echo "<input type='hidden' name='id' value='".$id."'><br>";
 	}


 	 ?>

<input type="submit" name="enviar" value="cambiar">

 </form>