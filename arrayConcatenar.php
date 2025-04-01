<?php
$datos1 = array("Animal" => "Leon", "Promedio de vida" => "15-20 años");
$datos2 = array("Grupo" => "Mamifero", "Alimentacion" => "Carnivoro");

$datosConbinados = array_merge($datos1, $datos2);

print_r($datosConbinados);
?>