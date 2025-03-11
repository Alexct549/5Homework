<?php
# Crea un array con 10 numeri casuali compresi tra 1 e 100.  
# Calcola la somma di tutti gli elementi dell’array. 
# Calcola la media dei numeri contenuti nell’array. 
$numbers = array();
for ($i = 0; $i < 10; $i++) $numbers[$i] = rand(1,100);
echo print_r($numbers,true);
echo "Somma elementi Array: " . array_sum($numbers);
echo "\nMedia elementi Array: " . array_sum($numbers)/count($numbers) ."";
?>
