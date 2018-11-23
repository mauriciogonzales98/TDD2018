<?php

namespace TDD;

class Mazo {

protected $baraja;

	public function __construct($array){
		$this->baraja = $array;	
	}


  	public function mezclar() {
  		shuffle($this->baraja);
    	return true;
	}
	  

	public function cortar($mazo){
		if( !($mazo->vacio()) ){
			$cantacortar = rand(1, $this->cantcart());
			$mazo1 = array_slice($mazo, 0, $cantacortar);
			$resto = $this->cantcart()-$cantacortar;
			$mazo2 = array_slice($mazo, $resto, $this->cantcart());
			$this->baraja = array_merge($mazo1, $mazo2);
			return $this->baraja;
		}
		else{
			return false;
		}
	}


	public function cantcart(){
		return count($this->obtMazo());
	}


   	public function obtMazo(){
		return $this->baraja;
 	}
 

	public function vacio(){
		if($this->cantcart() > 0){
			return true;
		}
		else{
			return false;
		}
	}


	public function agregarCarta(CartaEspanola $carta){
		$this->baraja[] = $carta;
		return true;
	}


	public function agregarMazo($mazo){
		$this->baraja = array_merge($this->baraja, $mazo);
		return true;
	}


	public function obtenerCarta($indice = -1){
		if($indice == -1){
			$indice = rand(0, $this->cantcart() - 1);
		}
		else{
			$indice = $indice -1;
		}
		if($indice >= 0 && $indice < $this->cantcart()){
			return $this->baraja[$indice];
		}
		else{
			return false;
		}
	}

	
}