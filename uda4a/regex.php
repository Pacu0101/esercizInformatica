<?php

$testo = "Ciao mondo";

preg_match("#mondo#",$testo);

echo preg_match("#mondo#",$testo) ? "Pattern trovato" : "Pattern non trovato";

echo '<br>';
// ^ serve per vedere se il pattern è all'inizio della stringa
echo preg_match("#^tutti#","ciao a tutti") ? "Pattern trovato all'inizio" : "Pattern non trovato all'inizio";

echo '<br>';
// $ serve per vedere se il pattern è alla fine della stringa
echo preg_match("#tutti$#","ciao a tutti") ? "Pattern trovato alla fine" : "Pattern non trovato alla fine";

echo '<br>';
// [] posso dare un range di caratteri che può cercare
echo preg_match("#[0-9]#","ciao 5 a tutti") ? "Pattern numero trovato" : "Pattern numero non trovato";

echo '<br>';

echo preg_match("#[A-Ca-c]#","Ciao 5 a tutti") ? "Pattern trovato" : "Pattern non trovato";

echo '<br>';
// ^ dentro le parentesi quadre ha come significato negato
// cerca qualsiasi cosa che non è un numero, gli estremi non sono compresi
echo preg_match("#[^0-9]#","54a") ? "Pattern non numero trovato" : "Pattern non numero non trovato";

echo '<br>';
// ? significa che cerca se ci sono 0 vocali oppure 1 vocale, se ne metti più di una da false
// * da true in tutti e tre i casi = 0; = 1; > 1
// + da true se c'è almeno una vocale, > 0
echo preg_match("#R[aeiou]+vigo#","Rovigo") ? "Pattern vocali trovato" : "Pattern vocali non trovato";

echo '<br>';

echo preg_match("#R[aeiou]+vigo[0-9]*#","Rovigo", $matches) ? "True" : "False";

echo '<br>';

var_dump($matches);

echo '<br>';

// senza mettere * si ferma soltanto alla prima vocale. Risultato "Re" invece di "Rea"
echo preg_match("#R[aeiou]*#","Reavigo", $matches) ? "True" : "False";

echo '<br>';

var_dump($matches);

echo '<br>';
// da false perchè trova la prima vocale e si aspetta di trovare subito v
// per dare true devi mettere *
echo preg_match("#R[aeiou]vigo#","Reavigo", $matches) ? "True" : "False";

echo '<br>';

var_dump($matches);

echo '<br>';
// con "i" ignora le maiuscole e le minuscole
echo preg_match("#ciao#i","CIAO", $matches) ? "True" : "False";

echo '<br>';

$tel = "0123456789";
// {} gli dò una quantita di numeri che deve cercare, se è <= alla quantita di numeri data da true
// > dà false
// con la "," puoi dare un minimo è un massimo che può catturare
echo preg_match("#[0-9]{3,8}#",$tel, $matches) ? "True" : "False";

echo '<br>';

var_dump($matches);

echo '<br>';
// "|" possiamo dare una sequenza di stringhe e vedere se ne trova almeno una
echo preg_match("#verde|rosso|blu#","rosso") ? "True" : "False";


