<?php

class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimir(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años';
    }

    static function sumar($a, $b){
        return $a+$b;
    }
}