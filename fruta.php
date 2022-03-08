<?php

    class fruta{
    	//propiedades
    	public $nombre;
    	public $color;

    	//metodo constructor
    	function __construct($nombre,$color){
    		$this->nombre=$nombre;
    		$this->color=$color;
    	}
    	//Metodos
    	function set_nombre ($nombre){
    		$this->nombre = $nombre;
    	}
    	function get_nombre(){
    	    return $this->nombre;

    }
   }
 ?>