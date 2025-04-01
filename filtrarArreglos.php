<?php

$obj = array(1, 2, 3, 4, 5);
$objFiltrar = array_filter($obj, function($valor){
    return $valor > 3;
});
print_r($objFiltrar);
?>