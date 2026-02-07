<?php

// abs(): restituisce il valore assoluto di un numero
echo abs(-10);
echo '<br>';

// ceil(): arrotonda per eccesso al numero intero superiore
echo ceil(4.2);
echo '<br>';

// floor(): arrotonda per difetto al numero intero inferiore
echo floor(4.8);
echo '<br>';

// round(): arrotonda un numero secondo le regole matematiche
echo round(4.6);
echo '<br>';

// mt_rand(): genera un numero casuale (Mersenne Twister), più veloce e migliore di rand()
echo mt_rand(1, 10);
echo '<br>';

// rand(): genera un numero casuale
echo rand(1, 10);
echo '<br>';

// min(): restituisce il valore minimo tra una lista di numeri
echo min(3, 7, 1, 9);
echo '<br>';

// max(): restituisce il valore massimo tra una lista di numeri
echo max(3, 7, 1, 9);
echo '<br>';

// sqrt(): restituisce la radice quadrata di un numero
echo sqrt(16);
echo '<br>';

// pow(): eleva un numero a potenza
echo pow(2, 3);
echo '<br>';

// intdiv(): divisione intera, restituisce solo la parte intera del risultato
echo intdiv(10, 3);
echo '<br>';

// number_format(): formatta un numero con separatori di migliaia e decimali
echo number_format(12345.678, 2, ',', '.');
echo '<br>';

// is_numeric(): verifica se il valore è numerico
var_dump(is_numeric("123"));
echo '<br>';

// is_int(): verifica se il valore è un intero
var_dump(is_int(10));
var_dump(is_int("10"));
echo '<br>';

// is_float(): verifica se il valore è un numero decimale (float)
var_dump(is_float(10.5));
echo '<br>';

// intval(): converte un valore in intero
echo intval("15.9");
echo '<br>';

// floatval(): converte un valore in numero decimale (float)
echo floatval("15.9");
echo '<br>';

// pi(): restituisce il valore di π
echo pi(); // 3.1415926535898...
echo '<br>';

# log(): restituisce il logaritmo naturale (base e) di un numero
echo log(10); // 2.302585...
echo '<br>';

# exp(): calcola e elevato alla potenza indicata. e = 2,71
echo exp(2); // 7.389...
echo '<br>';