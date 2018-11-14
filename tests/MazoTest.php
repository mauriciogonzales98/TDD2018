<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo[]));
    }

    public function testNuevoMazo(){
	$mazo= new Mazo;
	$baraja = $mazo->crearmazo();
	$this->assertTrue(isset($baraja));
   }

  public function testMezclable() {
  $mazo = new Mazo;
  $baraja = $mazo->crearmazo();
  $baraja = $mazo->mezclar($baraja);
  $this->assertTrue(isset($baraja));     
    }

  public function testCortar(){
	$mazo= new Mazo;
  $baraja = $mazo->crearmazo();
  $baraja = $mazo->cortar($baraja,26);
  $this->assertTrue(isset($baraja));  
   }

  public function testObtenercant(){
	$mazo= new Mazo;
  $baraja = $mazo->crearmazo();
  $total = $mazo->cantcart($baraja);
	 $this->assertTrue(isset($total)); 
   }

  public function testCarta(){
	$mazo= new Mazo;
	$this->assertTrue($mazo->obtcarta());
   }

 public function testVacio(){
	$mazo = new Mazo;
	$this->assertTrue($mazo->vacio());
 
 }

 public function testAgregar(){
	$mazo = new Mazo;
	$this->assertTrue($mazo->agregar());
 
 }
}
