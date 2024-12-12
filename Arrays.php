<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<?php
    $datos = array("Sara", "Martinez", 23, "Barcelona");

    for ($i = 0; $i < count($datos); $i++) {
        echo "dato " . ($i + 1) . "º: " . $datos[$i] . "<br>";
    }
?>

<h1>Ejercicio 2</h1>
<?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "Barcelona");

    foreach ($datos as $llave => $dato) {
        echo $llave . ": " . $dato . "<br>";
    }
?>

<h1>Ejercicio 3</h1>
<?php
    $datos = array("Sara", "Martinez", 23, "Barcelona");

    $datos[2] = 24;

    for ($i = 0; $i < count($datos); $i++) {
        echo "dato " . ($i + 1) . "º: " . $datos[$i] . "<br>";
    }
?>

<h1>Ejercicio 4</h1>
<?php
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "Barcelona");

    var_dump($datos);
?>

<h1>Ejercicio 5</h1>
<?php
    $letras = "a,b,c,d,e,f";

    $letrasSeparadas = explode(",", $letras);
        
    for ($i = count($letrasSeparadas) - 1; $i >= 0; $i--) {
        echo "letra " . ($i + 1) . "º: " . $letrasSeparadas[$i] . "<br>";
    }
?>

<h1>Ejercicio 6</h1>
<?php
    $notas = array("Marta" => 10, "Isabel" => 8, "Luis" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1);

    echo "Notas de los estudiantes: ";

    foreach ($notas as $nombre => $nota) {
        echo $nombre . ": " . $nota . " ";
    }
?> 

<h1>Ejercicio 7</h1>
<?php
    $notas = array("Marta" => 10, "Isabel" => 8, "Luis" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1);

    $media = array_sum($notas) / count($notas);

    $alumnosAprovados = array();

    foreach ($notas as $nombre => $nota) {
        if ($nota > $media) {
            array_push($alumnosAprovados, $nombre);
        }
    }

    echo "Media de las notas: " . number_format($media, 2) . "<br>";
    
    echo "Alumnos por encima de la nota media: <br>";
    foreach ($alumnosAprovados as $alumno) {
        echo $alumno . "<br>";
    }
?> 

<h1>Ejercicio 8</h1>
<?php
    $notas = array("Marta" => 10, "Isabel" => 8, "Luis" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1);

    $notaMaxima = max($notas);

    $alumnosMejorNota = array();

    foreach ($notas as $nombre => $nota) {
        if ($nota == $notaMaxima) {
            array_push($alumnosMejorNota, $nombre);
        }
    }

    echo "La nota mas alta es " . $notaMaxima . " ";

    if (count($alumnosMejorNota) > 1) {
        echo "y los mejores alumnos son " . implode(", ", $alumnosMejorNota);
    } else {
        echo "y el mejor alumno es " . $alumnosMejorNota[0];
    }
?> 
</body>
</html>