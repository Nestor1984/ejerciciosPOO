<?php

/*
Crea una clase Auto en PHP que utiliza un constructor para asignar valores a las propiedades del auto y un destructor para realizar limpieza de recursos. 
La clase debe ser capaz de manejar operaciones como encender, apagar, acelerar y frenar.

Detalles:

La clase debe tener propiedades como marca, modelo, color y estado (encendido o apagado).
La clase debe tener un método constructor __construct() que toma marca, modelo y color como parámetros y asigna estos valores a las propiedades correspondientes.
El estado del auto debe ser inicialmente 'apagado'.
La clase debe tener métodos como encender(), apagar(), acelerar() y frenar() que cambian el estado del auto y/o imprimen el estado actual del auto.
La clase debe tener un método destructor __destruct() que imprime un mensaje indicando que el auto está siendo destruido.
*/

class Auto{

    // Atributos
    private $marca;
    private $modelo;
    private $color;
    private $estado;

    // Metodos
    public function __construct($marca, $modelo, $color){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->estado = false;
    }

    public function encender(){
        if ($this->estado) {
            echo "El auto esta encendido<br>";
        }else{
            echo "Se acaba de encender el auto<br>";
            $this->estado = true;
        }
    }

    public function apagar(){
        if ($this->estado) {
            echo "El auto se acaba de apagar<br>";
            $this->estado = false;
        }else{
            echo "El auto esta apagado<br>";
        }
    }

    public function acelerar(){
        if (!$this->estado) {
            echo "El auto no esta encendido, no puede acelerar.<br>";
        }else{
            echo "El auto comenzo a acelerar";
        }
    }

    public function frenar(){
        if (!$this->estado) {
            echo "No puede frenar, por que el auto no esta encendido<br>";
        }else{
            echo "Acaba de frenar<br>";
        }
    }

    public function __destruct(){
        echo "<strong><em>El auto ha sido destruido</em></strong><br>";
    }

}