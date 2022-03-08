<?php
    $server ="localhost";
    $user = "root";
    $pass ="";
    $db = "baseejem";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if (!$conn)
    	die("conexión a base de datos fallo: ".mysqli_connect_error());

?>    