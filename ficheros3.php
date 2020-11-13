<?php 

/*Lectura de archivo*/
$solicitud = fopen("texto.txt", "r") or die("No se pudo abrir el archivo para ser leido");

while(!feof($solicitud)){
	$leer = fgets($solicitud);
	$ver = nl2br($leer);  //nl2br hace leer el archivo tan cual está escrito dentro del archivo de texto. 
	echo $ver;
}


 ?>