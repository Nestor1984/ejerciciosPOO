<?php

class Camion extends Vehiculo{

    // Atributos propios
    private $estadoEncendido = false;

    public function encender(){
        if ($this->estadoEncendido) { // Si da true
            echo "El Camion ya esta encendido<br>";
        }else{
            echo "Acaba de encender el Camion<br>";
            $this->estadoEncendido = true;
        }
    }

    public function apagar(){
        if (!$this->estadoEncendido) { // Si no esta encendido
            echo "El Camion ya esta apagado<br>";
        }else{ // Si esta encendido
            echo "Acaba de apagar el Camion<br>";
            $this->estadoEncendido = false;
        }
    }

    public function acelerar(){
        echo "El Camion acaba de acelerar<br>";
    }

    public function frenar(){
        echo "El Camion acaba de frenar<br>";
    }

}