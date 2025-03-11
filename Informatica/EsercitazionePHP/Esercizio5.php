<?php
#Inizializza una variabile php con una frase e fai quanto segue: 
#1. Conta il numero di caratteri (spazi inclusi). 
#2. Conta il numero di parole nella frase. 
#3. Sostituisci tutte le vocali (a, e, i, o, u) con il carattere *. 
#4. Converti la stringa in maiuscolo e minuscolo. 
$frase = "Ciao, come stai?";
echo "Inserisci una frase: " . $frase . "\n";
echo "Numero di caratteri: " . strlen($frase) . "\n";
echo "Numero di parole: " . str_word_count($frase) . "\n";
echo "Sostituzione vocali: " . str_replace(array('a','e','i','o','u'), '*', $frase) . "\n";
echo "Maiuscolo: " . strtoupper($frase) . "\n";
echo "Minuscolo: " . strtolower($frase) . "\n";
?>