<?php 

session_start();//sigue usando la sesión anterior
session_unset(); //deja la sesión en blanco
session_destroy(); //destruye la sesión
header('location: sesioneslogin1.php'); //redirecciona hacia  la página de login.





 ?>