<?php

class chao{
	const DEJANDO_MENSAJE = "Voy a ir a comerme una pizza";

	public function chaito(){
	echo self::DEJANDO_MENSAJE;
   }
}
echo chao::DEJANDO_MENSAJE;

$despedida = new chao();
$despedida->chaito();