<?php 

session_start(); 

echo "Bienvenido ". $_SESSION["usuario"]. "<br>";
echo "Usted Pertenece al país de ". $_SESSION["pais"]."<br>" ;

echo "<a href='sesioneslogin4.php'>Cerrar Sesión</a>";




 ?>