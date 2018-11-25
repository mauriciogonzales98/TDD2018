<?php 

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaPokerTest extends TestCase {

    public function testCrearCarta(){
        $carta = new CartaPoker('trebol', 2);
        $this->assertTrue(isset($carta));

        $carta2 = new CartaPoker('oro', 2);
        $this->assertNull($carta2->obtenerPalo());
        $this->assertNull($carta2->obtenerNumero());

        $carta3 = new CartaPoker('diamante', 'L');
        $this->assertNull($carta3->obtenerPalo());
        $this->assertNull($carta3->obtenerNumero());
    }

    public function testPaloYNumero(){
        $carta = new CartaPoker('trebol', 2);

        $this->assertEquals($carta->obtenerPalo(), 'trebol');
        $this->assertEquals($carta->obtenerNumero(), 2);
    }


}