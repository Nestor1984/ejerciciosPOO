<?php

class Vehiculo{

    // Atributos
    protected $marca;
    protected $anio;
    protected $modelo;
    
    public function __construct($marca, $anio, $modelo) {
        $this->marca = $marca;
        $this->anio = $anio;
        $this->modelo = $modelo;
    }

}