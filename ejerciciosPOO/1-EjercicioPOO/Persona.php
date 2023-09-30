<?php

/*
    1. Crea una clase Persona con los siguientes atributos: nombre, apellidos y edad.

    Crea su constructor y get y set.

    Crear las siguientes funciones:
    – mayorEdad: indica si es o no mayor de edad.
    – nombreCompleto: devuelve el nombre mas apellidos 
*/
class Persona{

    // Atributos
    private $nombre;
    private $apellido;
    private $edad;

    // Metodos
    public function __construct(){
        
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function mayorDeEdad(){
        return $this->edad > 18; // If implicito (si es mayor de 18 retorna true, caso contrario false)
    }

    public function nombreCompleto(){
        return "<strong> Nombre: </strong>" . $this->nombre . "<br>" . "<strong> Apellido: </strong>" . $this->apellido . "<br>" . "<strong> Edad: </strong>" . $this->edad . "<br>";
    }

}