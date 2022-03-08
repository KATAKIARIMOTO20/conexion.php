<?php

include "conexion.php";

$sql = "DELETE FROM alumno WHERE codigo = 24";

if (mysqli_query($conn, $sql)) {
	echo "registro eliminado con exito";
} else {
	echo "error al eliminar el registro".mysqli_error($conn);
}

mysqli_close($conn);

?>