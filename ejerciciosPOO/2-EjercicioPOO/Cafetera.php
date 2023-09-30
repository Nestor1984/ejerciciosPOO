<?php

/*
Ejercicio de una cafetera:
Enunciado: Crea una clase llamada "Cafetera" que tenga los siguientes métodos y atributos:
Atributos:
capacidadMaxima (privado): la capacidad máxima de la cafetera en centímetros cúbicos.
cantidadActual (privado): la cantidad actual de café en la cafetera en centímetros cúbicos.
Métodos:
__construct(): constructor predeterminado que establece la capacidad máxima en 1000 c.c. y la cantidad actual en cero (cafetera vacía).
llenarCafetera(): llena la cafetera hasta su capacidad máxima.
servirTaza($capacidadTaza): sirve una taza de café con una capacidad específica. Si la capacidad de la taza es mayor que la cantidad 
actual de café, muestra un mensaje indicando que no alcanza para una taza y sugiere recargar la cafetera. Si la capacidad de la taza 
es menor o igual que la cantidad actual de café, resta la capacidad de la taza a la cantidad actual de café.
vaciarCafetera(): vacía la cafetera, es decir, establece la cantidad actual de café en cero.
agregarCafe($rellenar): agrega una cantidad específica de café a la cafetera. Si la cantidad actual de café más la cantidad a agregar 
supera la capacidad máxima, la cantidad actual se establece en la capacidad máxima.
mostrar(): muestra la capacidad máxima y la cantidad actual de café en la cafetera.
*/

class Cafetera{

    // Atributos
    private $capacidadMaxima = 0;
    private $capacidadActual = 0;
   
    // Metodos
    public function __construct(){
        $this->capacidadMaxima = 1000;
        $this->capacidadActual = 0;
    }

    public function llenarCafetera(){
        $this->capacidadActual = $this->capacidadMaxima;
    }

    public function servirTaza($capacidadTaza){
        if ($capacidadTaza > $this->capacidadActual) {
            echo "No alcanza para una taza y se sugiere recargar la cafetera";
        }else if($capacidadTaza <= $this->capacidadActual){
            $this->capacidadActual = $this->capacidadActual - $capacidadTaza;
            echo "Se sirvio la taza";
        }
    }

    public function vaciarCafetera(){
        $this->capacidadActual = 0;
        echo "Se vacio la cafetera";
    }

    public function agregarCafe($rellenar){
        if( ($this->capacidadActual + $rellenar) > $this->capacidadMaxima ){
            $this->capacidadMaxima = $this->capacidadActual;
            echo "Se agrego cafe";
        }else{
            $this->capacidadActual = $rellenar;
            echo "Se agrego cafe";
        }
    }

    public function mostrar(){
        return "<strong>Capacidad Maxima: </strong>" . $this->capacidadMaxima . "<br><strong>Capacidad Actual: </strong>" . $this->capacidadActual;
    }

}