<?php
requere ("conexion.php");
$status = "";
$con=conectar();
$codigo=$_REQUEST['codigo'];
$descripcion=$REQUEST['descripcion'];
$precioventa=$REQUEST['precioventa'];
$preciocompra=$REQUEST['preciocompra'];
$existencia=$REQUEST['existencia'];

$query="insert into productos values ('$codigo','$descripcion','$precioventa','preciocompra','existencia')";

$cierto=mysql_query($query,$con);


if(!$cierto){
echo "No se ha podido guardar";
}
else{
echo "Datos Guardados Correctamente<br>";	
echo "<a href='guardar.html'>Regresar</a>;
}
?<