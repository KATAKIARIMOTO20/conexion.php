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

$consulta = "INSERT INTO alumno (nombre,apellido)VALUES ('Sebastian','Duran')";
if (mysqli_query($conn, $consulta) ){
    $ultimo_codigo = mysqli_insert_id($conn);
    echo "Alumno ingresado con el codigo: ".$ultimo_codigo;
}else{
    echo "Error ".$consulta."<br>".mysqli_error($conn);
}

?>    