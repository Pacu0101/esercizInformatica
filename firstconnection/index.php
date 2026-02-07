<?php

$db = new PDO(
    'mysql:host=192.168.60.144;dbname=patrick_pacurar_studenti;charset=utf8mb4',
    'patrick_pacurar',
    'cesseresti.sovvertano.',

    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]

);



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