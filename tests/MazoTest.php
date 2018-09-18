<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }

  public function testCortar(){
	$mazo= new Mazo;
	$this->assertTrue($mazo->cortar());
   }

  public function testObtenercant(){
	$mazo= new Mazo;
	$this->assertTrue($mazo->cantcart());
   }

  public function testCarta(){
	$mazo= new Mazo;
	$this->assertTrue($mazo->obtcarta());
   }

 public function testVacio(){
	$mazo = new Mazo;
	$this->assertTrue($mazo->cortar());
 
 }

 public function testAgregar(){
	$mazo = new Mazo;
	$this->assertTrue($mazo->agregar());
 
 }
}
