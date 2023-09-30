<?php

include("Calculadora.php");

if ( isset($_POST['opcion-elegida'], $_POST['primer-numero'], $_POST['segundo-numero']) ) {
    $opcion = $_POST['opcion-elegida'];
    $primerNum = $_POST['primer-numero'];
    $segunNum = $_POST['segundo-numero'];
}

$calculadora = new Calculadora();
$calculadora->ingresarMenu($opcion, $primerNum, $segunNum);

?>