<?php
#Scrivi un programma PHP che generi dinamicamente una tabella HTML di dimensione NxM  (numero di righe e colonne specificato dall’utente in delle variabili php). 
#Ogni cella della tabella  deve contenere il numero di riga e colonna (es. R1C1 per la prima riga e prima colonna). 
$N = 2;
$M = 1;
echo "<table border='1'>\n";
for ($i = 0; $i < $N; $i++) {
    echo "<tr>\n";
    for ($j = 0; $j < $M; $j++) {
        echo "<td>R".($i+1)."C".($j+1)."</td>";
    }
    echo "\n</tr>\n";
}
echo "</table>";
?>