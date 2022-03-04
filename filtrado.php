<?php

include "conexion.php";

$consulta = "SELECT codigo,nombre,apellido FROM alumno WERE apellido='Casas'";

$resultado = mysqli_query($conn, $consulta);

if(mysqli_num_rows($resultado) >0){
	echo "codigo:".$fila["codigo"]."Nombre:".$fila["nombre"]."apellido:".$fila["apellido"]."<br>;"
	}
}

?>