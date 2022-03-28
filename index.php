<?php
$testo = "Lorem ipsum dolor sit amet consectetur officiiis elit. Fugit sit officiiis provident porro? 
Odit sed officiis praesentium veritatis officiis doloribus expedita, culpa omnis necessitatibus eligendi. 
Impedit vitae recusandae officiis dolore. ";
$parola = $_GET["parola"];

$lunghezza_testo = strlen($testo);
$testo_censurato = str_replace($parola,"***",$testo);
$lunghezza_censura = strlen($testo_censurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>

<h2>Testo sensa modifiche</h2>

    <p>
        <?php echo $testo; ?>
    </p>

    <h3>Lunghezza del testo:</h3>

    <div>
        <?php echo $lunghezza_testo; ?>
    </div>


    <h2>Testo censurato</h2>
    <p>
        <?php echo $testo_censurato; ?>
    </p>

    <h3>Lunghezza del testo censurato:</h3>
    <div>
        <?php echo $lunghezza_censura; ?>
    </div>
</body>
</html>