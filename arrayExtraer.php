<?php
$language = array("Python", "C#", "C++", "Java", "PHP");  
$lenguajes_usados = array_slice($language, 2); 
print_r($language);                             
print_r($lenguajes_usados);  

$lenguajes_usados2 = array_slice($language, 2, null, true);
print_r($lenguajes_usados2);

?>