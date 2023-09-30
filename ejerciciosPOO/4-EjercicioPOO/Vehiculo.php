<?php

 abstract class Vehiculo{ // Super clase

    // Atributos
    protected $marca;
    protected $modelo;

    // Metodos
    public abstract function encender();
    public abstract function apagar();
    public abstract function acelerar();
    public abstract function frenar();


}