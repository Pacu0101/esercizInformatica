<?php

echo getcwd();
echo "<br>";
echo DIRECTORY_SEPARATOR;// serve se cambiamo sistema perchè ci sono sistemi che usano separatori diversi
$path = getcwd();
echo "<br>";
echo is_file($path.DIRECTORY_SEPARATOR."provaFile.txt") ? "true" : "false"; // per vedere se il file esiste
echo "<br>";
echo is_dir($path.DIRECTORY_SEPARATOR."prova") ? "true" : "false";
echo "<br>";
$items = scandir($path.DIRECTORY_SEPARATOR."prova");
echo '<h1>File nella directory</h1>';
echo '<br>';
echo '<ul>';
foreach ($items as $item){
    if(($item != '.') && ($item != '..'))// serve per togliere i due file nascosti
    echo '<li>'.$item.'</li>';
}
echo '</ul>';

$file1 = fopen("provaFile.txt", "w");
    fwrite($file1, "Ciao a tutti\n kys");
    fclose($file1);

$file1 = fopen("provaFile.txt", "a");
fwrite($file1, "\n Ciao a tutti2 ");
fclose($file1);

$classe =[
    'studente1' => ['Nome1','Cognome1',8],
    'studente2' => ['Nome2','Cognome2',7],
    'studente3' => ['Nome3','Cognome3',6],
    'studente4' => ['Nome4','Cognome4',9],
    'studente5' => ['Nome5','Cognome5',4],
    'studente6' => ['Nome6','Cognome6',8],

];

$file = fopen('voti.txt', "w");

foreach ($classe as $stud){
    $line = implode(',',$stud).PHP_EOL; // EOL = end of line ed è un "\n"
    fwrite($file,$line);// per file lunghi, in alternativa usare file_put_contents
}
fclose($file);

$file = fopen('voti.txt', 'w');
foreach ($classe as $key => $stud){
    $line = $key.' = '.implode(',',$stud).PHP_EOL;
    fwrite($file, $line);
}
fclose($file);

$datiFromFile = [];
$file = fopen('voti.txt', 'r');
while(($line = fgets($file))!= false){
    $datiFromFile[] = trim($line);
}
fclose($file);

foreach ($datiFromFile as $dati){
    echo $dati.'<br>';
}
echo '<br>';
echo $datiFromFile[1],'<br>';

$studente = explode(',', $datiFromFile[1]);
foreach ($studente as $st){
    echo $st.'<br>';

}

$frase = 'oggi è una bella giornata';
$arrayFrase = explode(' ', $frase);
foreach ($arrayFrase as $parola){
    echo $parola.'<br>';
}



function somma($a, $b){// Non sai cosa prendono le variabili in ingresso e non sai cosa ritorna
    return $a + $b ;
}

echo somma(3,4.50);

// Gli union types permettono di dichiarare parametri o valori di ritorno che possono avere uno o più tipi di dato
function somma2(float$a, int|float $b): int|float{
    return $a + $b;
}
echo '<br>';
echo somma2(3,4.50);
echo '<br>';
function stampa(int|string $v): void{
    echo 'Hai passato '.$v;
}

stampa('a');
echo '<br>';
function saluta(?string $nome): string{
    return "Ciao ".($nome ?? "Ospite");
}

echo saluta(null);
echo '<br>';
echo saluta("Alibaba");

function saluta2(?string $nome = 'utente'): string{
    return "Ciao ".$nome ;
}
echo '<br>';
echo saluta2();
echo '<br>';

$myvar = 10;
function myFunc($var){
    $var = 1;
    echo $var;
}
echo myFunc($myvar);// è normale che nn riporti il valore modificato
echo '<br>';
echo $myvar;

function sommaTotale(... $numeri): int|float{
    return array_sum($numeri);
}
echo '<br>';
echo sommaTotale(1,2,3,4,5);



