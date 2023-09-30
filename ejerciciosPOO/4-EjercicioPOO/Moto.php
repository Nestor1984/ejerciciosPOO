<?php

class Moto extends Vehiculo{

    // Atributos propios
    private $estadoEncendido = false;

    public function encender(){
        if ($this->estadoEncendido) { // Si da true
            echo "La Moto ya esta encendida<br>";
        }else{
            echo "Acaba de encender la Moto<br>";
            $this->estadoEncendido = true;
        }
    }

    public function apagar() {
        if (!$this->estadoEncendido) { // Si no esta encendido
            echo "La Moto ya esta apagada<br>";
        }else{ // Si esta encendido
            echo "Acaba de apagar la Moto<br>";
            $this->estadoEncendido = false;
        }
    }

    public function acelerar(){
        echo "La Moto acaba de acelerar<br>";
    }

    public function frenar(){
        echo "La Moto acaba de frenar<br>";
    }
}
