<?php

namespace TDD;

class Mazo {

public $baraja[];
public $y=0;
/*

 public function crearmazo(){
	for($i=0,$i<52,$i+=1){
	$this->cartas[$i]=$i+1;
	}
	return $cartas[];
}*/

 public function crearmazo(){
 	for($i=0,$i<4,$i+=1){
 		for($x=0,$x<13,$x+=1){
 			$carta=new Carta($x,$i,1);
 			$baraja[$y]=$carta;
 			$y+=1;
 	  }
 	}
 	return $baraja;
 }


  public function mezclar($baraja) {
  	 $baraja=shuffle($baraja);
    return $baraja;
  }

 public function cortar($baraja,$cantacortar){
 	$baraja1=array_slice($baraja, 0,$cantacortar);
 	$resto=52-$cantacortar;
 	$baraja2=array_slice($baraja, $resto,52);
 	$baraja=array_merge($baraja1,$baraja2);
	return $baraja;
 }

  public function cantcart($baraja){
  	 $total=count($baraja);
  	 return $total;
	
 }

   public function obtcarta(){
	return TRUE;
 }
 
 public function vacio(){
	if($this->cartas==NULL){
	return FALSE}
	else{
	return TRUE;
	} 
}

public function agregar(){
	return TRUE;
}

 

}
