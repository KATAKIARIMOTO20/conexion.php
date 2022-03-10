<?php

    class fruta{
    	//propiedades
    	public $nombre;
    	private $color;
        final public $peso;

    	//metodo constructor
    	function __construct($nombre,$color){
    		$this->nombre=$nombre;
    		$this->color=$color;
    	}
        function __destruct(){
    		echo "<br>la fruta es {$this->nombre}";

    	}
    	//Metodos
        function set_nombre($nombre){
    	     $this->nombre = $nombre;
        }

        function get_nombre(){
            return $this->nombre;
        }

    function sobreescribir_en_tropical(){
        echo "ya Estamos sobre escrito:{$this->nombre},{$this->color},{$this->peso}";
   }
}

