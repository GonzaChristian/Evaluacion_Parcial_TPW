
<?php
$cliente = "Fabricio";
$edad = 25;
$ingreso = 1800;

if (($edad >= 18 && $ingreso >= 1500) || $ingreso >= 4000) {
    $mensaje = "Puede solicitar el préstamo";
} else {
    $mensaje = "No cumple los requisitos";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación de préstamo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="tarjeta">
        <h2>Evaluación de préstamo</h2>

        <hr>

        <p>Cliente: <?php echo $cliente; ?></p>
        <p>Edad: <?php echo $edad; ?> años</p>
        <p>Ingreso mensual: S/ <?php echo $ingreso; ?></p>
        <h3><?php echo $mensaje; ?></h3>
    </div>
</body>
</html>
