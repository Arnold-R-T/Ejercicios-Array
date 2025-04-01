<?php
$planetas = array("Mercurio", "Venus", "Tierra");
$planetas[0] = "Marte";  
$planetas[] = "Saturno"; 
print_r($planetas);
unset($planetas[1]); // Elimina el azul pero los indices siguen siendo los mismos para los elementos que tenga
print_r($planetas);
?>