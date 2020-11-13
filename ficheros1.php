<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

   <!--Se envía mensaje por medio de método post donde son guardaros en un fichero.txt-->

	<form method="POST" action="ficheros2.php">
		
		Asunto: <input autocomplete="off" type="text" name="asunto"><br>
		Mensaje: <textarea name="mensaje" rows="10" cols="30"></textarea><br>
		<input type="submit" name="enviar">



	</form>
	
</body>
</html>




<?php 

/*
r 	: sólo léctura, pone le puntero al principio del archivo.
r+	: apertura para lectura y escritura, pone le puntero al principio del archivo.
w   : sólo escritura, lo abre, pone el puntero del fichero al principio, trunca el fichero (elimina lo qué se encuentra dentro)

w+  : escritura y escritura, trunca en 0 (antes de escribir borra todo lo de a dentro).
a   : apertura de sólo lectura.
a+  : apertura para lectura y escriturea.
x   : creación y apertura para sólo escritura.
x+  : creación y apertura para escritura, pero el puntero se va a donde queramos.
c   : abrir el fichero para sólo lectura, pero si no existe lo crea.
c+  : abrir el fichero para lectura y escritura , lo crea si no existe.
e   : estabecle  la bandera de cerrar.



*/


//para abrir o sobreescribir un fichero, si no existe, lo va a crear
//fopen("miarchivo.php", "a");

//para escribir, y escribir
//fwrite(handle, string);
 ?>