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
	  

	public function cortar(){
		if($this->vacio()){
			return false;
		}
		else{
			$cantacortar = rand(1, $this->cantcart());
			$baraja = $this->obtMazo();
			$mazo1 = array_slice($baraja, 0, $cantacortar-1);
			//$mazo2 = array_slice($this->baraja, $resto, $this->cantcart());
			$mazo2 = array_slice($baraja, $this->cantcart());
			$this->baraja = array_merge($mazo1, $mazo2);
			return $this->baraja;
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
			return false;
		}
		else{
			return true;
		}
	}


	public function agregarCarta(CartaEspanola $carta){
		$this->baraja[] = $carta;
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