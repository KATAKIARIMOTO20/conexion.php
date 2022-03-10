<?php

include "fruta.php";

$guanabana = new fruta("Guanabana","verde");

$guanabana->nombre ="soursop";
$guanabana->peso = "500gr";

echo $guanabana->nombre;
echo $guanabana->color;