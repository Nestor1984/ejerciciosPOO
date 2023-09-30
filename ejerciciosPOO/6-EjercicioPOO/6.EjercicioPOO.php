<?php

/*
Enunciado: Crea una clase llamada Vehiculo que tenga los siguientes atributos: marca, modelo y año.
 Luego, crea un trait llamado Motor que tenga el método acelerar() que imprima "El vehículo está acelerando".
  Por último, crea una clase llamada Auto que herede de la clase Vehiculo y utilice el trait Motor. 
  Crea una instancia de la clase Auto y llama al método acelerar().
*/

require "Auto.php";

$auto = new Auto("Ferrari", 2023, "Huracan"); // Con en php no hay un constructor especial como en java, php llama automaticamente al constructor de la clase super en este caso Vehiculo

$auto->acelerar();


?>