<?php

include "conexion.php";

$consulta = "SELECT codigo, nombre, apellido FROM alumno WhERE apellido = 'Casas'";

$resultado = mysqli_query($conn, $consulta);

if(mysqli_num_rows($resultado) > 0){
	while ($fila = mysqli_fetch_assoc($resultado)){
	echo "codigo:".$fila["codigo"]."  Nombre:  ".$fila["nombre"]."  apellido:  ".$fila["apellido"]."<br>";
	}
}

?>