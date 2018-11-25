<?php 

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaPokerTest extends TestCase {

    public function testCrearCarta(){
        $carta = new CartaPoker('trebol', 2);
        $this->assertTrue(isset($carta));

        $this->assertFalse(new CartaPoker('oro', 2));
        $this->assertFalse(new CartaPoker('diamante', 'L'));
    }

    public function testPaloYNumero(){
        $carta = new CartaPoker('trebol', 2);

        $this->assertEquals($carta->obtenerPalo(), 'trebol');
        $this->assertEquals($carta->obtenerNumero(), 2);
    }


}