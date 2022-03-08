<?php

include "conexion.php";

$sql = "UPDATE alumno SET apellido='Penagos' WHERE codigo = 2";

if (mysqli_query($conn, $sql)) {
	echo "registro actualizado correctamente";
} else {
	echo "error al actualizar el registro: ".mysqli_error($conn);
}
mysqli_close($conn);

?>