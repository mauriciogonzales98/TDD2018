<?php 

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaEspanolaTest extends TestCase {

    public function testCrearCarta(){
        $carta = new CartaEspanola('copa', 1);
        $this->assertTrue(isset($carta));

        $this->assertFalse(new CartaEspanola('picas', 2));
    }

    public function testPaloYNumero(){
        $carta = new CartaEspanola('copa', 1);

        $this->assertEquals($carta->obtenerPalo(), 'copa');
        $this->assertEquals($carta->obtenerNumero(), 1);
    }


}