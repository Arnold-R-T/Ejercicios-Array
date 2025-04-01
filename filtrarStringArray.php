<?php
$concursantes = array("Player_001" => "Juan", "Player_002" => "Luis", "Player_003" => "Jose", "Player_004" => "Pedro");
asort($concursantes);
print_r($concursantes);
$nivelFiltrar = array_filter($concursantes, function($valor){
    return strpos($valor, 'J') === 0;
});
print_r($nivelFiltrar);
?>