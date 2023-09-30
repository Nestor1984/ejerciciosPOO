<?php

class Coche extends Vehiculo{

    // Atributos propios
    private $estadoEncendido = false;

    public function encender(){
        if ($this->estadoEncendido) { // Si da true
            echo "El Coche ya esta encendido<br>";
        }else{
            echo "Acaba de encender el Coche<br>";
            $this->estadoEncendido = true;
        }
    }

    public function apagar(){
        if (!$this->estadoEncendido) { // Si no esta encendido
            echo "El auto ya esta apagado<br>";
        }else{ // Si esta encendido
            echo "Acaba de apagar el Coche<br>";
            $this->estadoEncendido = false;
        }
    }

    public function acelerar(){
        echo "El coche acaba de acelerar<br>";
    }

    public function frenar(){
        echo "El coche acaba de frenar<br>";
    }

}