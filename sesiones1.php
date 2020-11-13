<?php 

//Inicia una sesión
session_start();


/*
echo "El identificador de la sesión es ".session_id();
echo "<br>";
echo "El nombre de la sesión es:  ". session_name();
*/


//destruyye todos los datos con la sesión actual.
//session_destroy();

//se asosacia variables, como logins u otras cosas para que sigan en todo el sistema.


//se usaba antes así
//session_register(name)


//esta variable de sesión será usada en sesiones2.php
$_SESSION['nombre']= "Michel Charnay";








 ?>