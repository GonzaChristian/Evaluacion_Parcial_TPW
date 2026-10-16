
<?php

$producto1 = "mesa";
$precio1 = 100;
$cantidad1 = 2;

$producto2 = "silla";
$precio2 = 36;
$cantidad2 = 10;

$subtotalmesa = $precio1 * $cantidad1;
$subtotalsilla = $precio2 * $cantidad2;

$subtotal = $subtotalmesa + $subtotalsilla;

$descuento = $subtotal * 10 / 100;

$total = $subtotal - $descuento;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>descuento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="tarjeta">
        <h1>Tienda</h1>

        <hr>

        <h2>Productos comprados</h2>

        <hr>

        <p>Producto 1:</p>
        <p class="dato"><?php echo $producto1; ?></p>

        <p>Precio por unidad:</p>
        <p class="dato">S/ <?php echo $precio1; ?></p>

        <p>Cantidad:</p>
        <p class="dato"><?php echo $cantidad1; ?></p>

        <p>Subtotal de la mesa:</p>
        <p class="dato">S/ <?php echo $subtotalmesa; ?></p>

        <hr>

        <p>Producto 2:</p>
        <p class="dato"><?php echo $producto2; ?></p>

        <p>Precio por unidad:</p>
        <p class="dato">S/ <?php echo $precio2; ?></p>

        <p>Cantidad:</p>
        <p class="dato"><?php echo $cantidad2; ?></p>

        <p>Subtotal de las sillas:</p>
        <p class="dato">S/ <?php echo $subtotalsilla; ?></p>

        <hr>

        <p>Subtotal de la compra:</p>
        <p class="dato">S/ <?php echo $subtotal; ?></p>

        <p>Descuento del 10%:</p>
        <p class="descuento">S/ <?php echo $descuento; ?></p>

        <p>Total a pagar:</p>
        <p class="precio">S/ <?php echo $total; ?></p>
    </div>

</body>
</html>

