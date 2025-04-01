<?php
// Ejercicio de clase 
$mes = array("Enero", "Febrero", "Marzo");
$mes[] = "Abril";
print_r($mes);
$mesEliminar = "Enero";
$llave = array_search($mesEliminar, $mes);
if($llave!==false){
    unset($mes[$llave]);
}
print_r($mes);
?>