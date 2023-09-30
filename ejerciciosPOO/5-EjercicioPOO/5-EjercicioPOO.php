<?php

/*
 Supongamos que estás creando un programa para una tienda de música en línea. Quieres implementar una interfaz llamada "Reproducible" que represente 
 a todos los productos de música que se pueden reproducir en la tienda. La interfaz debe tener los siguientes métodos:

1. reproducir(): Este método debe reproducir el producto de música.
Tu tarea es crear una clase llamada "Cancion" que implemente la interfaz "Reproducible". La clase "Cancion" debe tener los siguientes atributos:

1. titulo: El título de la canción.
2. artista: El artista de la canción.
3. duracion: La duración de la canción en segundos.
Además, la clase "Cancion" debe implementar el método de la interfaz "Reproducible" de la siguiente manera:

1. reproducir(): Muestra un mensaje en la consola indicando que la canción se está reproduciendo, junto con su título y artista.
Una vez que hayas creado la clase "Cancion", crea una instancia de la clase y llama al método reproducir() para reproducir la canción.
 */

 // Autoload
 function Autoload($clase){
    require $clase . ".php";
 }

 spl_autoload_register("Autoload");

 $cancion = new Cancion("Holy", "Justin Biber", "3 minutos");
 $cancion->reproducir();