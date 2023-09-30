<?php
/*
Crea una clase abstracta Vehiculo con propiedades como marca, modelo y métodos abstractos
 como encender(), apagar(), acelerar() y frenar(). Luego, crea las clases Coche, Moto y Camion 
 que hereden de Vehiculo e implementen los métodos abstractos de acuerdo a su funcionamiento específico.
*/

// Nuestro autoload
function autoload($clase){ // Cada vez que hacemos una instancia el nombre de esa clase pasa aqui como parametro
    include_once $clase . ".php";
}

spl_autoload_register("autoload");

/**
 * El autoload evita que hagamos esto:
 * include_once "Moto.php";
 * include_once "Camion.php";
 * include_once "Coche.php";
 */

// Hacemos las instancias o creamos objetos
$moto = new Moto();
$camion = new Camion();
$coche = new Coche();

$moto->encender();
$moto->apagar();
$moto->apagar();
$moto->acelerar();
$moto->frenar();

echo "<hr>";

$camion->acelerar();
$camion->frenar();

echo "<hr>";

$coche->acelerar();
$coche->frenar();






