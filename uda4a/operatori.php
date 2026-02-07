<?php

echo 'Operatore ternario';
echo '<br>';

$x = 5;
$risultato = $x > 6 ? 'ok' : 'No ok';
echo $risultato;
echo '<br>';
echo '<br>';

echo 'Operatore coaleshing';
// se la variabile ha un valore riporta quel valore, altrimenti riporta il valore scritto dopo le ??
echo '<br>';

$nome = '5F';
$risultato2 = $nome ?? 'default';
echo $risultato2;
echo '<br>';
echo '<br>';

echo 'Operatore spaceship';
// riporta -1 se il valore di sinistra > di quello di destra, 1 se è il contrario, invece 0 se sono uguali
echo '<br>';

$y = 7;
$x = 4;
echo $x <=> $y;
echo '<br>';

$stringa = 'ciao';

echo 'lunghezza stringa';
echo '<br>';
echo strlen($stringa);
echo '<br>';

echo 'inverti stringa';
echo '<br>';
echo strrev($stringa);
echo '<br>';

echo 'il primo carattere viene messo in maiuscolo';
echo '<br>';
echo ucfirst($stringa);
echo '<br>';

$stringa2 = 'ciao a tutti';
echo 'il primo carattere di ogni parola viene messo in maiuscolo';
echo '<br>';
echo ucwords($stringa2);
echo '<br>';
echo '<br>';

// Datatime()
$data = new DateTime();
echo 'Data e ora di oggi <br>'.$data -> format("d/m/y H:i:s");
echo '<br>Ora di oggi <br>'.$data -> format( "H:i:s");
echo '<br>Data di oggi <br>'.$data -> format("d/m/y");

$data -> modify("+2 days");
echo '<br>Data di oggi +2 gironi <br>'.$data -> format("d/m/y");
$data2 = new DateTime("-3 days");
echo '<br>Data di oggi -3 gironi <br>'.$data2 -> format("d/m/y");
echo '<br>';

echo "Differenza tra due date";
echo '<br>';
$d1 = new DateTime("2025/01/10 12:20:30");
$d2 = new DateTime("2023/02/15 02:15:10");
$diff = $d1 ->diff($d2);
echo $diff-> days;
echo '<br>';
echo $diff-> y;
echo '<br>';
echo $diff-> m;
echo '<br>';
echo $diff -> format("%y-%m-%d-%h-%i-%s");
echo '<br>';
echo '<br>';

$intervallo = new DateInterval("P1Y3M4DT2H3M4S");
$newData = $d1 -> add($intervallo);
echo $newData -> format("d/m/y H:i:s");


