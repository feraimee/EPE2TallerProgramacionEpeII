<?php
include("conexion.php");
$con=conectar();

if(isset($REQUEST['mostrar'])){
$query="select * from productos ";
$cierto=mysql_query($query,$con);

if(!$cierto){
echo "No se ha podido consultar";	
} 
else{
	echo"<!DOCTYPE html>
<html> <head><title>Insertar Datos</title> </head>
<body>";
echo "<strong>Datos encontrados</strong><br><br>";
echo "<table border='1'>";
echo "<tr> <td>CODIGO</td><td>DESCRIPCION</td><td>PRECIO</td></tr>";
echo"<tr>";
while($row=mysql_fetch_array($cierto)){
echo "<td>".$row['codigo']."</td>
<td>".$row['descripcion']."</td>
<td>".$row['precioventa']."</td>
<td>".$row['preciocompra']."</td>	
<td>".$row['precioventa']."</td>
<td>".$row['existencia']."</td>
}
echo "</table></body></html>";
}
}
echo "<a href='mostrar.html'>Regresar</a>";
}
?>






}