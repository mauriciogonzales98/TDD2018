<?php 

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaPokerTest extends TestCase {

    public function testCrearCarta(){
        $carta = new CartaPoker('trebol', 2);
        $this->assertTrue(isset($carta));

        $this->assertFalse($carta2 = new CartaPoker('oro', 2));
        $this->assertFalse($carta3 = new CartaPoker('diamante', 'L'));
    }

    public function testPaloYNumero(){
        $carta = new CartaPoker('trebol', 2);

        $this->assertEquals($carta->obtenerPalo(), 'trebol');
        $this->assertEquals($carta->obteneNumero, 2);
    }


}