<?php

require 'DataBaseConn.php';
$dbconfig = require 'configuration/DBConfiguration.php';

$db = DataBaseConn::getDB($dbconfig);

/*
$dbconfig = require 'configuration/DBConfiguration.php';

$db = new PDO( $dbconfig['dsn'], $dbconfig['username'], $dbconfig['password'], $dbconfig['options'] );
*/
//READ

$query = 'SELECT * FROM studenti';

try {
    $stmt = $db->prepare($query);
    $stmt->execute();

    while ($user = $stmt->fetch()) {
        echo "ID:". $user->id. '<br>';
        echo "nome:". $user->nome . '<br>';
        echo "cognome:". $user->cognome . '<br>';
        echo "media:". $user->media . '<br>';
        echo "data_iscrizione:". $user->data_iscrizione . '<br>';
    }
    $stmt->closeCursor();
}catch(PDOException $e) {
    echo "A DB error occured. Please try again later. ";
}


/*
//READ 2
$studentename = 'Antonio';
$query = 'SELECT media, cognome FROM studenti WHERE nome = :name'; // i ":" sono dei marcatori

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':name', $studentename, PDO::PARAM_STR);
    $stmt->execute();

    while ($user = $stmt->fetch()) {
        echo "cognome:". $user->cognome . '<br>';
        echo "media:". $user->media . '<br>';
        echo "<hr>";
    }
    $stmt->closeCursor();
}catch(PDOException $e) {
    echo "A DB error occured. Please try again later. ";
}
*/

//CREATE
/*
$query = 'INSERT INTO studenti (nome,cognome,media,data_iscrizione)
        VALUES (:nome,:cognome,:media, NOW())';

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', 'Lucy', PDO::PARAM_STR);
    $stmt->bindValue(':cognome', 'Taylor', PDO::PARAM_STR);
    $stmt->bindValue(':media', 8, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->closeCursor();
} catch (PDOException $e) {
    echo "A DB error occured. Please try again later. ";
}
*/

/*
//UPDATE

$query = 'UPDATE studenti
            SET media = :media
            WHERE nome = :nome';

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', "Antonio", PDO::PARAM_STR);
    $stmt->bindValue(':media', 9, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt->rowCount() === 0){
        echo "No rows were updated. Please try again later. ";
    }else{
        echo "Rows were updated.";
    }

} catch (PDOException $e) {
    echo "A DB error occured. Please try again later. ";
    echo "<br>";
}
*/

//DELETE

$query = 'DELETE FROM studenti WHERE nome = :name';

try{
    $stmt = $db->prepare($query);
    $stmt->bindValue(':name', 'Lucy', PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount() === 0){
        echo "No rows were updated. Please try again later. ";
    }else{
        echo "Rows were updated.";
        $stmt->closeCursor();
    }
} catch(PDOException $e) {
    echo "A DB error occured. Please try again later. ";
}



