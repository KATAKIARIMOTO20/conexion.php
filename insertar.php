<?php
    $server ="localhost";
    $user = "root";
    $pass ="";


    //crea conexión
    $conn = mysqli_connect($server, $user, $pass);

    //Verificar conexión
    if (!$conn) {
    	die("conexión fallo: ".mysqli_connect_error());
    }
    
    
    echo "conexión ok<br>";

$db = "baseejem";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn){
    die("conexión a base de datos fallo".mysqli_connect_error());
}

/// consulta para insertar  un registro nuevo

echo "Encontró base de datos<br>";

$consulta = "INSERT INTO  alumno (nombre, apellido) VALUES ('Nora','Sierra')";

$query = mysqli_query($conn, $consulta);

if(!$query){
    echo "Error".$consulta. "<br>".mysqli_error($conn);
}else{
    echo "se creó un nuevo  registro";
}

?>    