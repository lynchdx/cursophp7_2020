<?php 
/*Conexion a bd*/
include("conexion.php");

/*query*/
$query = "SELECT * FROM datos";

$resultado = mysqli_query($conexion, $query);


/*recorre el listar que ofrece el select * from, RELLENA LA FILA */

echo " <table border='1'> <tr><td>NOMBRE Y APELLIDO</td><td>EDAD</td><td>CELULAR</td><td colspan='2'>Acciones</td></tr>";
while ($fila = mysqli_fetch_array($resultado)) {
	echo "<tr>";
	echo "<td>" . $fila['NOMBRE']." ".$fila['APELLIDO']. "</td>";
	echo "<td>" . $fila['EDAD']. "</td>";
	echo "<td>" . $fila['CELULAR']. "</td>";
	echo "<td><a href='eliminarNegocio.php?id=".$fila['ID']."'>Eliminar</a></td>";//por metodo GET  se envia el  id
	echo "<td><a href='modificar.php?id=".$fila['ID']."'>Modificar</a></td>";
	echo "</tr>";
}
echo "</table>"


 ?>