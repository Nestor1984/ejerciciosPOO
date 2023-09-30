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

function autoload($clase){
    require $clase . ".php";
}

spl_autoload_register("autoload");

$auto = new Auto("Nissan", "12-p", "Rojo");

$auto->acelerar();

?>