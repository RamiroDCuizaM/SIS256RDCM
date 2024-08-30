<?php
class OperacionesCadena{
    public $cadena;

    //constructor
    public function __construct($cadena){
        $this->cadena = $cadena;
    }

    public function invertir(){
        $invertida = strrev($this->cadena);
        return $invertida;
    }

    public function mayuscula(){
        $mayus = strtoupper($this->cadena);
        return $mayus;
    }
    public function minuscula(){
        $minus = strtolower($this->cadena);
        return $minus;
    }
}
?>