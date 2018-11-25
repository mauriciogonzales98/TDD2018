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
      $this->assertTrue($mazo->vacio());
 }


 public function testAgregar(){
      $mazo = new Mazo([]);
      $carta = new CartaEspanola('oro', 10);
      $this->assertTrue($mazo->agregarCarta($carta));
      $this->assertFalse($mazo->vacio());
 }

 public function testCortar(){
    $mazo = new Mazo([]);
    $this->assertFalse($mazo->cortar());
    $carta = new CartaEspanola('oro', 10);
    $mazo->agregarCarta($carta);
    $carta2 = new CartaEspanola('oro', 2);
    $mazo->agregarCarta($carta2);
    $carta3 = new CartaEspanola('basto', 5);
    $mazo->agregarCarta($carta3);
    $carta4 = new CartaEspanola('copa', 10);
    $mazo->agregarCarta($carta4);   
    $bar = $mazo->obtMazo();
    $this->assertNotEquals($mazo->cortar(), $bar);
 }


}
