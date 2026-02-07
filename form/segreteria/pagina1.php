<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Segreteria</title>
</head>
<body>

<h1 id="h1-1">BENVENUTO NELLA SEGRETERIA</h1>

<form method="post" action="elabora2.php">
<p>Inserire il numero di corsi da attivare</p>
    <p>Ricordiamo che si può insierire un minimo di un corso e un massimo di 10</p>
    <label for="corsi">Età:</label> <input id="corsi"  type="number" name="corsi" min="1" max="10"><br>

    <br>

<button type="submit">Invia</button>
</form>

</body>
</html>
