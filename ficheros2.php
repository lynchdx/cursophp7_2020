<?php 



//se captan datos enviados por medio de método post desde "ficheros1.php"
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//Se crea la conexión donde se abre o crea archivo texto.txt
//or die hace relación a si ha fallado o no la ejecución 
$solicitud = fopen("texto.txt", "a") or die("No se pudo abrir el archivo para escribir");



//primero pide la conexión para el fichero al que se escribirá.
fwrite($solicitud, "Asunto: ");
fwrite($solicitud, "\n");
fwrite($solicitud, $asunto);
fwrite($solicitud, "\n");
fwrite($solicitud, "Mensaje: ");
fwrite($solicitud, "\n");
fwrite($solicitud, $mensaje);

echo "La operación fue correcta <br>";
echo "<a href='ficheros3.php'>Ver escritura</a>";

fclose($solicitud);



 ?>