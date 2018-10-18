<?php

namespace TDD;



class Carta {

	protected $palo;

    protected $numero;

    protected $española;

    public function __construct($palo, $numero, $española) {
        $this->palo = $palo;
        $this->numero = $numero;
        $this->española = $española;
       
}


    public function obtenerPalo() {
        return $this->palo;
    }

   
    public function obteneNumero() {
        return $this->numero;
    }