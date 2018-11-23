<?php

namespace TDD;

class Mazo {

protected $baraja;
protected $cantCartas;

	public function __construct($array){
		$this->baraja = $array;	
		$this->cantCartas = 0;
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
			$mazo2 = array_slice($mazo, $resto, 52);
			$this->baraja = array_merge($mazo1, $mazo2);
			return $this->baraja;
		}
		else{
			return false;
		}
	}


	public function cantcart(){
		return $this->cantCartas;
	}


   	public function obtMazo(){
		return $this->baraja;
 	}
 

	public function vacio(){
		if(isset($this->baraja)){
			return true;
		}
		else{
			return false;
		} 
	}


	public function agregarCarta($carta){
		$this->baraja[$this->cantCartas] = $carta;
		$this->cantCartas += $this->cantCartas;
		return TRUE;
	}


	public function agregarMazo($mazo){
		$this->baraja = array_merge($this->baraja, $mazo);
		$this->cantCartas = count($this->baraja);
		return TRUE;
	}


	public function pickCart($indice = -1){
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
