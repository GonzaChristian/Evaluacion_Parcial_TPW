<?php
$nota1 = 15;
$nota2 = 14;
$nota3 = 16;
$nota4 = 18;
$nota5 = 12;
$nota6 = 17;
$nota7 = 13;
$nota8 = 15;
$nota9 = 17;
$nota10 = 13;
$nota11 = 16;
$nota12 = 17;

$suma = $nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8 + $nota9 + $nota10 + $nota11 + $nota12;

$promedio = $suma / 12;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio de notas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="tarjeta">
        <h1> Promedio de notas </h1>

        <hr>

        <p>
            nota 1 = 15<p>
            nota 2 = 14<p>
            nota 3 = 16<p>
            nota 4 = 18<p>
            nota 5 = 12<p>
            nota 6 = 17<p>
            nota 7 = 13<p>
            nota 8 = 15<p>
            nota 9 = 17<p>
            nota 10 = 13<p>
            nota 11 = 16<p>
            nota 12 = 17<p>
        </p>

        <hr>

        <h2>Suma de las 12 notas:</h2>

        <p class="suma">
            <?php echo $suma; ?>
        </p>

        <hr>

        <h2>Promedio final:</h2>

        <p class="promedio">
            <?php echo $promedio; ?>
        </p>
    </div>

</body>
</html>
