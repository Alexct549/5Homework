<?php
# Scrivi un programma in PHP che stampi tutti i numeri multipli di 5 compresi tra 1 e 100 utilizzando  un ciclo for. 
# Poi, riscrivi lo stesso programma usando un ciclo while. 
echo "Multipli di 5 tra 1 e 100 con ciclo for: \n";
for ($i = 1; $i <= 100; $i++) {
    if ($i%5===0) echo $i . " ";
}
$i=1;
echo "\nMultipli di 5 tra 1 e 100 con ciclo while: \n";
while ($i <= 100) {
    if ($i%5===0) echo $i . " ";
    $i++;
}
?>
