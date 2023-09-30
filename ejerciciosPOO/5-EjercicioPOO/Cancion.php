<?php

class Cancion implements Reproducible{

    // Atributos
    private $titulo;
    private $artista;
    private $duracion;

    public function __construct($titulo, $artista, $duracion){
        $this->titulo = $titulo;
        $this->artista = $artista;
        $this->duracion = $duracion;
    }

    public function reproducir(){
        echo "La cancion que se esta reproduciendo es: " . $this->titulo . "<br>" . "El artista es: " . $this->artista . "<br>" . "La duracion es: " . $this->duracion;
    }

}

?>