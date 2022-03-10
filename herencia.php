<?php

include "fruta.php";

class tropical extends fruta {
	public function mensaje(){	
		echo "el nombre de  esta fruta es : ";
	}
}

$mandarina = new tropical ("mandarina","naranja");
$mandarina->mensaje();

echo $mandarina->nombre;


		