<?php
// trim è una funzione che mi elimina gli spazi
$nome = $_POST ["nome"] ?? ""; // POST è una variabile globale (chiamato super global) che contiene i dati inseriti nel form se viene usato il metodo POST
                                // il name in HTML è "l'identificatore" per nome
$cognome = $_POST ["cognome"] ?? "";
$email = $_POST ["email"] ?? "";
$password = $_POST ["password"] ?? "";
$eta = $_POST ["età"] ?? "";
$sesso = $_POST ["sesso"] ?? "";
$corsi = $_POST ["corsi"] ?? [];
$citta = $_POST ["citta"] ?? "";
$lingua = $_POST ["lingua"] ?? [];
$area = $_POST ["area"] ?? "";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Nome: <?=$nome?></p>
<p>Cognome: <?=$cognome?></p>
<p>Email: <?=$email?></p>
<p>Password: <?=$password?></p>
<p>Età: <?=$eta?></p>
<p>Sesso: <?=$sesso?></p>
<p>Corso:</p>
    <?php foreach ($corsi as $corso):?>
        <p><?=$corso?></p>
    <?php endforeach;?>
<p>Città: <?=$citta?></p>
<p>Lingua:</p>
    <?php foreach ($lingua as $l): ?>
        <p><?=$l?></p>
            <?php endforeach;?>
<p>Area: <?=$area?></p>
</body>
</html>
