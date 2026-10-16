<?php
$producto = "Teclado";
$precio = 45;
$cantidad = 11;

$subtotal = $precio * $cantidad;

if ($cantidad >= 10) {
    $descuento = $subtotal * 20 / 100;
} elseif ($cantidad >= 5) {
    $descuento = $subtotal * 10 / 100;
} else {
    $descuento = 0;
}

$total = $subtotal - $descuento;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Descuento de productos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="tarjeta">
        <h1>Mercado</h1>
        
        <hr>

        <h2><?php echo $producto; ?></h2>
        
        <p>Precio unitario:</p>
        <p class="dato">S/ <?php echo $precio; ?></p>

        <p>Cantidad:</p>
        <p class="dato"><?php echo $cantidad; ?></p>

        <p>Subtotal:</p>
        <p class="dato">S/ <?php echo $subtotal; ?></p>

        <p>Descuento:</p>
        <p class="descuento">S/ <?php echo $descuento; ?></p>

        <hr>
        
        <p>Total a pagar:</p>
        <p class="precio">S/ <?php echo $total; ?></p>
    </div>
</body>
</html>

