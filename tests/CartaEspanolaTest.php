<?php 
namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaEspanolaTest extends TestCase {

    public function testCrearCarta(){
        $carta = new CartaEspanola('copa', 1);
        $this->assertTrue(isset($carta));
    }
}