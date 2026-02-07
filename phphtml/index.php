<?php
$var = "Ciao, sono php";
$num = 10;

$materie = ["Informatica", "Sistemi", "Gpoi", "TPSIT"];

$msg = "Ciao da PHP";

$studenti = [ // studenti è un array normale che contiene degli array associativi

        [
                "nome" => "Maria",
                "cognome" => "Rossi",
                "media" => 6
        ],

        [
                "nome" => "Marco",
                "cognome" => "Formaggio",
                "media" => 5
        ],

        [
                "nome" => "Martina",
                "cognome" => "Bianchi",
                "media" => 8
        ]

];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>
<body>

<button id="b1">Premi</button>

<p>Ciao</p>

<p><?=$var?></p>

<?php if($num > 8):?>
<p> <?=$num?> è un numero maggiore di 8</p>
<?php else:?>
<p> <?=$num?> è un numero minore di 8</p>
<?php endif;?>

<?php foreach ($materie as $m):?>
<p><?=$m?></p>
    <hr>
<?php endforeach;?>

<p><?php echo $studenti[0]['nome']?></p>

<br>
<table id="t1">

    <!-- Stampa attributi nella tabella -->
    <tr>
    <?php foreach ($studenti[0] as $key => $value):?>
        <th><?=$key?></th>
    <?php endforeach;?>
    </tr>

    <!-- Stampa dati nella tabella -->

    <?php foreach ($studenti as $studente):?>
    <tr>
        <?php foreach ($studente as $s):?>
        <th><?=$s?></th>
        <?php endforeach;?>
    </tr>
    <?php endforeach;?>

</table>
<br>

<?php while($num > 6): ?>
<p><?= $num--?></p>
<?php endwhile;?>

<footer>
    <p>&copy; 2026 Nome Azienda. Tutti i diritti riservati.</p>
</footer>


<script>message = <?= json_encode($msg)?></script>
<script src="js1.js"></script>
</body>
</html>
