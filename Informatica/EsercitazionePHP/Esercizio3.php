<?php
#Scrivi un programma che dopo aver inizializzato una variabile php un’email verifichi, tramite una  espressione regolare, se è valida. Un’email valida deve rispettare la seguente sintassi: 
#Deve contenere almeno un carattere prima della @ 
#Deve contenere una @ seguita da almeno un carattere 
#Deve terminare con un dominio valido, come .com, .it, .org, ecc. 
$exp = '/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/';
$email = 'A@.com';
if (preg_match($exp, $email)) echo "L'email è valida!"; #VULNERABILE non usare in un sito
else echo "L'email non è valida.";
?>