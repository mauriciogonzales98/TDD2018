<?php

namespace TDD;

class CartaEspañola {

	protected $palo;
    protected $numero;

    public function __construct($palo, $numero) {
        $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $pal = ['basto', 'oro', 'copa', 'espada'];

        if(in_array($palo, $pal) && in_array($numero, $num)){
            $this->palo = $palo;
            $this->numero = $numero;  
        }
        else{
            return false;
        }
             
    }


    public function obtenerPalo() {
        return $this->palo;
    }

    
    public function obteneNumero() {
        return $this->numero;
    }

}