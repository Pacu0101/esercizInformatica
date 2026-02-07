<?php

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

<form method="POST" action="elabora.php"> <!--method è un verbo http (di default mette GET e non POST); action è un secondo attributo che va a prendere un file PHP-->
    <h1>Informazioni</h1>
    <label for="nome">Nome:</label> <input id="nome" "type="text" name="nome"><br>
    <label for="cognome">Cognome: </label> <input id="cognome"  type="text" name="cognome"><br>
    <label for="email">Email:</label> <input id="email"  type="email" name="email"><br>
    <label for="password">Password:</label> <input id="password"  type="password" name="password"><br>
    <label for="età">Età:</label> <input id="eta"  type="number" name="età"><br>
    <br>
    <label for="sesso">Sesso:</label> <br>
        <input id="sesso"  type="radio" name="sesso" value="M">M
        <input id="sesso"  type="radio" name="sesso" value="F">F <br>
    <br>
    <label for="corsi">Corsi</label><br>
        <input id="corsi"  type="checkbox" name="corsi[]" value="php">PHP<br>
        <input id="corsi"  type="checkbox" name="corsi[]" value="java">Java<br>
        <input id="corsi"  type="checkbox" name="corsi[]" value="html">HTML <br>
    <br>
    <!-- Drop down list -->
    <label for="citta">Città di Residenza</label><br>
    <select name="citta" >
        <option value="">--Seleziona--</option>
        <option value="Roma">Roma</option>
        <option value="Milano">Milano</option>
        <option value="Firenze">Firenze</option>
        <option value="Rovigo">Rovigo</option>
        <option value="Napoli">Napoli</option>
        <option value="Palermo">Palermo</option>
    </select>
    <br>
    <br>
    <!-- list box multipla -->
    <label for="lingua">Lingue conosciute</label><br>
    <select name="lingua[]" multiple>
        <option value="Inglese">Inglese</option>
        <option value="Tedesco">Tedesco</option>
        <option value="Francese">Francese</option>
        <option value="Italiano">Italiano</option>
        <option value="Cinese">Cinese</option>
    </select>
    <br>
    <br>
    <label for="area">Parlaci di te...</label><br>
    <textarea name="area"></textarea>
    <br>
    <button type="submit">Invia</button>

</form>

</body>
</html>
