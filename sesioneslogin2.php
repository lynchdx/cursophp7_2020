<?php 

/*Eston son los datos con los cuales se van a comparar en el formulario*/
$user = "mcharnay";
$pass = "pass123";


//si los datos del formulario coinciden con los de arriba, abre sesion guardando datos de sesión
if ($_POST['usuario']==$user &&$_POST['contrasena']==$pass) { 
	session_start();
	
	//guarda datos de sesión dentro de variables, estos serán usados en sesioneslogin3.php
	$_SESSION['usuario'] = "Michel Charnay Escobar";
	$_SESSION['pais'] = "Chile";

	//redirecciona a otra página
	header('location: sesioneslogin3.php');
}else{

	echo "Su nombre de usuario o constraseña son incorrectos. <br>";
	echo "<a href='sesioneslogin1.php'>INTENTAR NUEVAMENTE</a>";
}



 ?>