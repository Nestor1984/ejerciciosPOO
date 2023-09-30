<?php
/*
Crea una clase llamada Libreria. Esta clase debe tener los siguientes atributos: nombre (string), direccion (string) y 
libros (array). Los libros serán representados como un array asociativo que incluye titulo (string) y autor (string).

Además, la clase Libreria debe tener los siguientes métodos:

agregarLibro($titulo, $autor): Este método debe tomar un título y un autor, crear un libro como un array asociativo, y 
agregarlo al array de libros.
eliminarLibro($titulo): Este método debe tomar un título y eliminar el libro correspondiente del array de libros.
mostrarLibros(): Este método debe imprimir todos los libros en la librería, mostrando el título y el autor de cada libro.
Después de crear la clase, instancia una Libreria, agrega algunos libros, elimina un libro y muestra los libros restantes.

Por último, asegúrate de que tu código maneje correctamente los casos en los que se intenta eliminar un libro que no existe 
en la librería.

Este ejercicio te ayudará a practicar la manipulación de arrays dentro de una clase, así como el manejo de casos de error 
en la programación orientada a objetos.
 */


class Libreria{

    // Atributos
    private $nombre;
    private $direccion;
    private $libros = array();

    // Metodos
    public function __construct($nombre, $direccion){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function agregarLibro($titulo, $autor){
        $this->libros[] = array("Titulo"=>$titulo, "Autor"=>$autor);
    }

    public function eliminarLibro($titulo){

        for ($i=0; $i < count($this->libros); $i++) { 
            if ($titulo == $this->libros["Titulo"]) {
                
            }
        }
    }

    public function mostrarLibro(){

    }
}

?>