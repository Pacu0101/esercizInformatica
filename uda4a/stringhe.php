<?php

$frase = "Ciao a tutti";

// strlen
// riporata la lunghezza della stringa
echo strlen($frase);
echo '<br>';

// strrev
// inverte la stringa
echo strrev($frase);
echo '<br>';

// strtolower
// mette tutti i caratteri in minuscolo
echo strtolower($frase);
echo '<br>';

// strtoupper()
// mette tutti i caratteri in maiuscolo
echo strtoupper($frase);
echo '<br>';

// ucfirst()
// mette il primo carattere della stringa in maiuscolo
echo ucfirst($frase);
echo '<br>';

// ucwords()
// mette il primo carattere di ogno parola in maiuscolo
echo ucwords($frase);
echo '<br>';

// trim()
// toglie lo gli spazi all'inizio della stringa e alla fine
echo trim(" Ciao ");
echo '<br>';

// ltrim()
// toglie gli spazi bianchi all'inizio della stringa
echo ltrim(" Ciao");
echo '<br>';

// rtrim()
// toglie gli spazi bianchi alla fine della stringa
echo rtrim("Ciao ");
echo '<br>';

// explode()
// esplode
print_r(explode(" ", "ciao mondo"));
echo '<br>';

// implode()
// unisce gli elementi di un array con una stringa
echo implode("-", ["ciao","mondo"]);
echo '<br>';

// str_replace()
// rimpiazza la stringa con un'altra stringa
echo str_replace("mondo","amico","ciao mondo");
echo '<br>';

// substr()
// ritorna una parte della stringa dandogli un inzio e una lunghezza
echo substr($frase, 0,6);
echo '<br>';

// strpos()
// ti dice la prima posizione del carattere inserito
echo strpos($frase, "a");
echo '<br>';

// strrpos()
// ti dice l'ultima posizione del carattere inserito
echo strrpos($frase, "a");
echo '<br>';

// strstr()
// trova la stringa inserendo solo i caratteri iniziali
echo strstr($frase, "tut");
echo '<br>';

// stristr()
// ???
echo stristr($frase, "tut");
echo '<br>';

// sprintf()
// ritorna una stringa composta
$string = sprintf("Il numero è: %d", 5);
echo $string;
echo '<br>';

// printf()
// stampa una stringa (come l'echo)
printf("Ciao %s", "Pacu");
echo '<br>';

// number_format()
// formata il numero dandogli anche quanti deciamli contare
echo number_format(1231, 1);
echo '<br>';

// addslashes()
// mette dei slash quando mettiamo l'apostrofo
echo addslashes("l'acqua");

// stripslashes()
// toglie gli slash
echo stripslashes("l\\'acqua");