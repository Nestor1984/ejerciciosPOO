<?php


class Calculadora
{

    // Atributos
    private $numero1;
    private $numero2;
    private $resultado;
    private $opcion;

    // Metodos
    public function ingresarMenu($opcion, $numero1, $numero2){
        $this->opcion = $opcion;
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;

        switch ($opcion) {
            case 1:
                $suma = self::sumar($numero1, $numero2);
                echo $suma;
                break;

            case 2:
                $restar = self::restar($numero1, $numero2);
                echo $restar;
                break;

            case 3:
                $multiplicar = self::multiplicar($numero1, $numero2);
                echo $multiplicar;
                break;

            case 4:
                $dividir = self::dividir($numero1, $numero2);
                echo $dividir;
                break;

            default:
                echo "Error";
                break;
        }
    }

    public function sumar($numero1, $numero2){
        return $numero1 + $numero2;
    }

    public function restar($numero1, $numero2){
        return $numero1 - $numero2;
    }

    public function multiplicar($numero1, $numero2){
        return $numero1 * $numero2;
    }

    public function dividir($numero1, $numero2){
        return $numero1 / $numero2;
    }


}
