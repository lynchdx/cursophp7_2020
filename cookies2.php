<?php 

/*
setcookie('pais', 'chile', time()+3600, '/', 'www.mipagina.cl', $_SERVER('HTTPS'));
*/


/*
Las coockies llevan :

- nombre : se le pone país, da lo mismo.
- valor
- expire , se usa time()+3600, lo troma en seg, entonces es 1 hora.
- path, desde donde se toma la coockie; si estuviera dentro de otra caroepta sería /carpeta/
- dominio
- secure : se usa el protocolo https, da lo mismo



*/

$miPais= $_POST['pais'];

setcookie('nuestroPais', '$miPais', time()+3600);


 ?>