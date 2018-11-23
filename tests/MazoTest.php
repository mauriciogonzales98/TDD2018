<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo([4,20]);
        $this->assertTrue(isset($mazo));
    }


  public function testMezclable() {
      $mazo = new Mazo([1,5,7,4,2]);
      $oldMazo = $mazo->obtMazo();
      $this->assertTrue($mazo->mezclar());
      $mazo->mezclar();
      $this->assertNotEquals($mazo, $oldMazo);
  }


  // public function testCortar(){
  //     $mazo= new Mazo;
  //     $baraja = $mazo->crearmazo();
  //     $baraja = $mazo->cortar($baraja,26);
  //     $this->assertTrue(isset($baraja));  
  //  }


  public function testObtenerCant(){
      $mazo = new Mazo([1,5,7,4,2]);
      $this->assertEquals($mazo->cantcart(),5);
   }


  public function testObtCarta(){
      $carta = new CartaEspanola('basto', 5);
      $mazo = new Mazo([$carta]);
      $this->assertEquals($mazo->obtenerCarta(1), $carta);
      //checkear
      $this->assertFalse($mazo->obtenerCarta(-2));
   }


 public function testVacio(){
      $mazo = new Mazo([]);
      $this->assertFalse($mazo->vacio());
 }


 public function testAgregar(){
      $mazo = new Mazo([]);
      $carta = new CartaEspanola('oro', 10);
      $this->assertTrue($mazo->agregarCarta($carta));
 }


}
