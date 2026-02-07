<?php // sezione server side (eseguita dal server)

$var = "Buongiorno";

$materie = ["Informatica","Sistemi","TPIST","GPOI"];

$n = 5;
$n2 = 3;

$msg = "Questo è un messaggio per JS";

$studenti = [

        [
                'nome' => 'Mario',
                'cognome' => 'Gonzalez',
                'media' => 7
        ],

        [
                'nome' => 'Giulia',
                'cognome' => 'Rossi',
                'media' => 8
        ],

        [
                'nome' => 'Martino',
                'cognome' => 'Formaggio',
                'media' => 6
        ],

]

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myStyle.css">
    <title>Sito</title>
</head>
<body>

<p>Ciao</p>
<p><?php echo $var?></p>

<p><?=$var?></p> <!-- La forma compata. Utilizzare solo per stampare il valore di una variabile-->
<!-- Il browser non mostra nulla di PHP perchè il codice PHP viene eseguito dal server che trasforma il codice-->

<?php foreach ($materie as $item): ?>
<hr>
<p><?=$item?></p>
<?php endforeach; ?> <!-- chiude il foreach -->

<!-- IF e ELSE-->

<?php if ($n == $n2):?>
<p> <?=$n?> è uguale a <?=$n2?></p>
<?php else: ?>
<p> <?=$n?> è diverso da <?=$n2?></p>
<?php endif; ?>

<!-- Tabella studenti-->

<table border="1">
    <tr>
        <th>nome</th>
        <th>cognome</th>
        <th>media</th>
    </tr>

    <?php foreach ($studenti as $element): ?>
        <tr>
            <?php foreach ($element as $valore): ?>
                <td><?= $valore ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>


<!-- JS -->
<button id="b1">Premi</button>
<script> message=<?=json_encode($msg)?></script> <!-- json_encode serve perchè non si può assegnare un variabile ad un'altra se sono di 2 domini diversi -->
<script src = interaction.js></script>

</body>
</html>
