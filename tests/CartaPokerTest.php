<?php 

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaPokerTest extends TestCase {

    public function testCrearCarta(){
        $carta = new CartaPoker('trebol', 2);
        $this->assertTrue(isset($carta));

        $carta2 = new CartaPoker('oro', 2);
        $this->assertFalse(isset($carta2));

        $carta3 = new CartaPoker('diamante', 'L');
        $this->assertFalse(isset($carta3));
    }

    public function testPaloYNumero(){
        $carta = new CartaPoker('trebol', 2);

        $this->assertEquals($carta->obtenerPalo(), 'trebol');
        $this->assertEquals($carta->obtenerNumero(), 2);
    }


}