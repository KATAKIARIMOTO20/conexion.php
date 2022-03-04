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

$consulta = "INSERT INTO alumno(nombre,apellido)VALUES ('Juan','Castiblanco');";
$consulta.="INSERT INTO alumno (nombre,apellido)VALUES('Emilcen','casas');";
$consulta.="INSERT INTO alumno(nombre,apellido)VALUES('Paula','Barrera');";

if(mysqli_multi_query($conn,$consulta)){
    echo"se registraron multiples alumno";
}

?>    