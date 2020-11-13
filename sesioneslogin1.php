<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

  

	<!--Se envian los datos dentro del formulario a pagina php sesioneslogin2.php mediante método post-->
	<form method="POST" action="sesioneslogin2.php">
		
		Nombre de usuario: <input autocomplete="off" type="text" name="usuario"><br>
		Contraseña : <input  type="password" name="contrasena"><br>
		<input type="submit" name="enviar">

	</form>
	
</body>
</html>