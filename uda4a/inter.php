<?php

// Una funzione di callback è una funzione passata per argomento
// ad un altra funzione che ouò essere utilizzata in un 2 momento o al verificarsi di un evento

// Es
function esegui($callback){ // accetta una o più funzioni
    $callback();
}
function saluta(){
    echo "ciao <br>";
}

function salutaCortese(){
    echo "Buongiorno <br>";
}

esegui('saluta');

function esegui2($nomefunz){
    $nomefunz();
}

esegui2('saluta');
esegui2('salutaCortese');

// Callback con parametri
function applica($callback, $val){ // se ho un'insieme di istruzioni che devo utilizzare da per tutto
    return $callback($val);
}

function doppio($x){
    return $x*2;
}

echo applica('doppio', 5);
echo '<br>';

// Callback con una funzione anonima (non ha bisogno della funzione di callback)

echo applica(function($x){ // se ho un'insieme di istruzioni che devo utilizzare in questo punto
    return $x+2;
},10);

echo '<br>';

// Arrow function - funzioni anonime compatte

$doppio2= fn($x) => $x*2;
echo $doppio2(3);

echo '<HR>';
echo applica(fn ($x) => $x*2, 5); //Landa expression (la uso solo qunado si ha UNA espressio)
echo '<br>';

// Classe e oggetto

class Studente{
    private string $nome;
    private int $eta;

    private static $numero;
    public function setEta(int $eta): void
    {
        $this->eta = $eta;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function  saluta3() : void{
        echo "Ciao, sono $this->nome <br>";
    }

    public static function presentazine() : void{
        echo 'Ciao sono uno studente <br>';
        self::$numero++;
        echo self::$numero.'<br>';
    }
}

$s = new Studente();
$s->setNome("Marco");
$s->setEta(18);

$s2 = new Studente();
$s2->setNome("Giacomi");
$s2->setEta(17);

$s->saluta3();
$s2->saluta3();

Studente::presentazine();
Studente::presentazine();


