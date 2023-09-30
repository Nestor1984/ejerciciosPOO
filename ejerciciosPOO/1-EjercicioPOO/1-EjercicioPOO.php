<?php
require("Persona.php");
/*
    1. Crea una clase Persona con los siguientes atributos: nombre, apellidos y edad.

    Crea su constructor y get y set.

    Crear las siguientes funciones:
    – mayorEdad: indica si es o no mayor de edad.
    – nombreCompleto: devuelve el nombre mas apellidos 
 */

 if ( isset($_POST['nombre-persona'], $_POST['apellido-persona'], $_POST['edad-persona']) ) {
    $nombre = $_POST['nombre-persona'];
    $apellido = $_POST['apellido-persona'];
    $edad = $_POST['edad-persona'];
 }

 // Enviamos los datos
 $persona = new Persona();
 $persona->setNombre($nombre);
 $persona->setApellido($apellido);
 $persona->setEdad($edad);

 # Mostramos si es menor de edad
 $esMayorDeEdad = $persona->mayorDeEdad();
 echo "¿Cumple la mayoria de edad?: " . $esMayorDeEdad . "<br>";

 # Mostramos los datos
 echo $persona->nombreCompleto();
