<?php

require "Animal.php";

class Perro extends Animal{

    // Atributos
    protected $raza;

    // Metodos
    public function __construct($nombre, $edad, $raza){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->raza = $raza;
    }

    public function getRaza(){
        return $this->raza;
    }



}

?>