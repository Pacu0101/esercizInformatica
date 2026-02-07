<?php
echo 'ciao';
echo '<br>';
echo 'buongiorno a tutti';
echo '<br>';
$var = 10;
echo 'il valore della variabile è ' . $var;
echo '<br>';
var_dump($var);
$var = 'ciao';
echo '<br>';
var_dump($var);
$var2 = 2;
$var3 = 3;
echo '<br>';
echo M_PI;
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';
echo PHP_INT_MIN;
echo '<br>';
// echo phpinfo();
if ($var2 < $var3) {
    echo 'lol';
} else echo 'ciao';
echo '<br>';

echo "Dichiarazione vettore";
$vett1 = [];
$vett = [10, 20, 30];
echo '<br>';
echo $vett[0];
echo '<br>';
echo "Conteggio elementi";
echo '<br>';
$n = count($vett);
echo $n;
echo '<br>';
echo "Visualizzo gli elementi del vettore";
echo '<br>';
for ($i = 0; $i < $n; $i++) {
    echo $vett[$i];
    echo '<br>';
}
echo '<br>';
echo "Visualizzo gli elementi del vettore con print_r";
echo '<br>';
print_r($vett);
echo '<br>';
var_dump($vett);
$vett2 = [10, 20, 30, 'a', 'b'];
echo '<br>';
var_dump($vett2);
echo '<br>';
echo "Modi per aggiungere un dato ad un array";
echo '<br>';


array_push($vett2, 50);
echo implode(" ", $vett2);
$vett2[] = 60;
echo '<br>';
echo implode(" ", $vett2);

echo '<br>';
echo "Modo per cancellare un dato alla fine";
array_pop($vett2);
echo '<br>';
echo implode(" ", $vett2);

echo '<br>';
echo "Modo per cancellare un dato all'inizio ";
array_shift($vett2);
echo '<br>';
echo implode(" ", $vett2);

echo '<br>';
echo "Modo per controllare l'esistenza di un elemento ";
echo '<br>';
if (in_array(20, $vett2)) {
    echo "Il numero esiste";
} else {
    echo "Non esiste";
}
echo '<br>';

echo "Modo per mettere in ordine crescente ";
echo '<br>';
$vett3 = [20, 150, 30, 'b', 'a'];
sort($vett3);
echo implode(" ", $vett3);
echo '<br>';

echo "Array associativi";
$studente = [
    "nome" => "Marco",
    "eta" => 18,
];
echo '<br>';
echo $studente['nome'];
echo '<br>';

$studente["cognome"] = "Bianchi";
echo "Stampo dati con un foreach";
echo '<br>';
foreach ($studente as $chiave => $valore){ //chiave sarebbe il nome e l'età
    echo "$chiave: $valore <br>";
}

echo "Vettore associativo annidato";
echo "<br>";
$studenti = [
    "studente1" =>[
        "nome" => "Gigi",
        "voto" => 7
    ],
    "studente2" =>[
        "nome" => "Paolo",
        "voto" => 8.5
    ],
];

echo $studenti["studente2"]["nome"];
echo "<br>";
echo $studenti["studente2"]["voto"];
echo "<br>";

$config = [
    "database" => "mio_db",
    "utente" => "admin",
    "password" => "12345"
];

if  (array_key_exists("nome", $studente)){
    echo "Chiave trovata";
}else{
    echo "Chiave non trovata";
}
echo "<br>";

$chiavi = array_keys($studente);
var_dump($chiavi);
echo "<br>";
$valori = array_values($studente);
var_dump($valori);
echo "<br>";

echo $valori[1];
echo "<br>";
echo $chiavi[1];
echo "<br>";

if (array_key_exists("eta", $studente)){
    echo ("Chiave età trovata");
} else {
    echo ("Chiave età non trovata");
}
echo "<br>";
echo next($studente);

$var1 = 5;
$var2 = '5';
echo "<br>";
if($var1 == $var2){
    echo "Sono uguali";
}else echo "Sono diversi";
echo "<br>";

if($var1 === $var2){
    echo "Sono uguali";
}else echo "Sono diversi";
echo "<br>";

$var3 = "ciao";
if(0 == $var3){ // Darebbe che sono uguali se fosse una versione vecchia di PHP
    echo "Sono uguali";
}else echo "Sono diversi";
echo "<br>";

if (isset($a)){// restituisce false se la variabile non esiste o è NULL
    echo "esiste";
}else echo "non esiste";
echo "<br>";

$var4 = null;
if (is_null($var4)){ // riporta vero solo se è null
    echo "è null";
}else echo "non è null";
echo "<br>";

if (isset($var4)){
    echo "esiste";
}else echo "non esiste";
echo "<br>";

$var5 = 0;
if (empty($var5)){ // ritorna vero solo se è zero o null
    echo "è vuota";
}else echo "non è vuota";


