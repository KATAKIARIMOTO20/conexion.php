<?php

include "fruta.php";

class tropical extends fruta{
	public $peso;
	public function __construct($nombre,$color,$peso){
	$this->nombre = $nombre;
	$this->color = $color;
	$this->pesos = $peso;
}
public function sobreescriir_en_tropical(){
echo "Ya Estamos sobre escribiendo el metodo tropical:{$this->nombre},{$this->color},{$this->peso}";
}
}
$banano = new fruta ("banano","amarillo");
$banano->sobreescribir_en_tropical();   
  
  $limon = new tropical("limon","verde","40gr");
  $limon->sobreescribir_en_tropical();
  