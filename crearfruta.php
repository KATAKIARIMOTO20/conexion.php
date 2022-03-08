<?php
 
 include"fruta.php";
 $manzana = new fruta("","");
 $papaya = new fruta("","");

$manzana->set_nombre("Manzana");
$papaya->set_nombre("Papaya");

$freijoa = new fruta("freijoa","verde");
 echo $manzana-> get_nombre();
 echo"<br>";
 echo $papaya->get_nombre();
echo"<br>";
echo $freijoa->get_nombre();
echo"<br>";
?>