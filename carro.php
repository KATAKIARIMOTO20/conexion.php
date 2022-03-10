<?php
//clase madre
abstract class carro {
   public $nombre;
   public function __construct($nombre){
   	$this->nombre = $nombre;
   }
  adstract public function introduccion() : string;
}


// class hijas
class camioneta extends carro {
public function introduccion() : string (
	retur "Escogimos camioneta :$this->nombre"
}
}
$toyota->introduccion();
echo "<br>"