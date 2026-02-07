<?php


// array_map
// applica una funzione ogni elemento dell'array
$numeri = [1,2,3,4];
$risultato = array_map(function($n){
return $n * 2;
}, $numeri);

var_dump($risultato);
echo '<br>';

// array_filter
// filtra i valori di un array
$risultato2 = array_filter($numeri, function ($n){
    return $n > 2;
});
var_dump($risultato2);
echo '<br>';

// array_walk
// modifica ogni elemento di un array soltanto che fa direttamente nella funzione
array_walk($numeri, function (&$n){
 $n = $n + 10;
});

var_dump($numeri);
echo '<br>';

$risultato_lampda = array_map(fn($n) => $n * 2, $numeri);
var_dump($risultato_lampda);

