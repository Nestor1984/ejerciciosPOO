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
servirTaza($capacidadTaza): sirve una taza de café con una capacidad específica. Si la capacidad de la taza es mayor que la cantidad actual de café, muestra un mensaje indicando que no alcanza para una taza y sugiere recargar la cafetera. Si la capacidad de la taza es menor o igual que la cantidad actual de café, resta la capacidad de la taza a la cantidad actual de café.
vaciarCafetera(): vacía la cafetera, es decir, establece la cantidad actual de café en cero.
agregarCafe($rellenar): agrega una cantidad específica de café a la cafetera. Si la cantidad actual de café más la cantidad a agregar supera la capacidad máxima, la cantidad actual se establece en la capacidad máxima.
mostrar(): muestra la capacidad máxima y la cantidad actual de café en la cafetera.
*/

include ("Cafetera.php");

$opcion = 0;

// Recepcionamos y validamos los datos
if ( isset($_POST['opcion-elegida']) ) {
    $opcion = $_POST['opcion-elegida'];
}

// Hacemos una instancia de la clase
$cafetera = new Cafetera();

switch($opcion){

    case 1:
        $cafetera->llenarCafetera();
        echo "Se lleno la cafetera";
        break;

    case 2:
        $cafetera->servirTaza(100); //  1 taza de café = 100 cc
        break;

    case 3:
        $cafetera->vaciarCafetera();
        break;

    case 4:
        $cafetera->agregarCafe(100);
        break;

    case 5:
        $mensaje = $cafetera->mostrar();
        echo $mensaje;
        break;

    default:
        echo "Hubo algun error!!";
        break;

}