<?php

include "conexion.php";

$consulta = "SELECT id,nombre,apellido FROM alumno";
$resultado = mysqli_query($conn,$consulta);

if(mysqli_num_rows($resultado)>0){

	while ($fila= mysqli_fetch_assoc($resultado) ){

		echo "codigo estudiante:".$fila["codigo"]."Nombre: ".$fila["codigo"]."Nombre:".$fila["apellido"]."<br>";

	}
}
?>
