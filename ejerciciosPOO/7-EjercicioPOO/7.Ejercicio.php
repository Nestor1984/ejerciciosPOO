<?php

/*
1. Crea una clase padre llamada Animal con los siguientes atributos y métodos:
Atributos:
nombre (string)
edad (int)
Métodos:
getNombre(): devuelve el nombre del animal
getEdad(): devuelve la edad del animal

2. Crea una clase hija llamada Perro que herede de la clase Animal y añade los siguientes atributos y métodos:
Atributos:
raza (string)
Métodos:
getRaza(): devuelve la raza del perro

3. Crea una instancia de la clase Perro y muestra por pantalla la información del perro (nombre, edad y raza).
*/

function Autoload($clase){
    require $clase . ".php";
}

spl_autoload_register("Autoload");


$perro = new Perro("Max", 10, "Pitbull"); // Invocamos al constructor de la clase hija
$nombre = $perro->getNombre();
$edad = $perro->getEdad();
$raza = $perro->getRaza();

echo "<strong> <em>El nombre del perro es: </em> </strong>" . $nombre . 
"<br><strong> <em>La edad del perro es: </em> </strong>" . $edad . 
"<br><strong> <em>La raza del perro es: </em> </strong>" . $raza;