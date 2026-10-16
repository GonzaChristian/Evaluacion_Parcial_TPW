<?php
// Constantes: información fija del negocio.
define("NEGOCIO", "FoodBox");
define("MONEDA", "S/");

// Variables: datos de un pedido registrado.
$numeroPedido = 205;                 // int
$cliente = "Diego Torres";          // string
$producto = "Hamburguesa clásica";  // string
$cantidad = 3;                       // int
$precioUnitario = 18.75;             // float
$totalRegistrado = 56.25;            // float
$confirmado = true;                  // bool
$observaciones = null;               // null
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo NEGOCIO; ?> - Resumen de pedido</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f3ec;
            color: #333;
        }

        header, footer {
            background: #a94420;
            color: white;
            text-align: center;
            padding: 22px;
        }

        main {
            max-width: 760px;
            margin: 30px auto;
            padding: 0 16px;
        }

        section {
            background: white;
            padding: 24px;
            border: 1px solid #e8ddd0;
            border-radius: 8px;
        }

        h2 {
            color: #a94420;
        }

        .portada img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 8px;
            margin: 10px 0 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #e7e1d9;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #fff2e5;
        }

        .total {
            background: #fff2e5;
            padding: 16px;
            font-weight: bold;
            margin-top: 18px;
        }
    </style>
</head>
<body>
    <header>
        <h1>🍔 <?php echo NEGOCIO; ?></h1>
        <p>Registro de pedidos de comida rápida</p>
    </header>

    <main>
        <section>
            <h2>Resumen del pedido</h2>
            <div class="portada">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=1200&q=80" alt="Hamburguesa clásica preparada con lechuga, queso y tomate">
            </div>
            <p>Este pedido de hamburguesas es un ejemplo para mostrar información almacenada mediante variables y constantes de PHP.</p>

            <table>
                <tr>
                    <th>Dato</th>
                    <th>Valor registrado</th>
                </tr>
                <tr>
                    <td>Número de pedido</td>
                    <td><?php echo $numeroPedido; ?></td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td><?php echo $cliente; ?></td>
                </tr>
                <tr>
                    <td>Producto</td>
                    <td><?php echo $producto; ?></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><?php echo $cantidad; ?></td>
                </tr>
                <tr>
                    <td>Precio unitario</td>
                    <td><?php echo MONEDA; ?> <?php echo $precioUnitario; ?></td>
                </tr>
                <tr>
                    <td>Pedido confirmado</td>
                    <td><?php var_dump($confirmado); ?></td>
                </tr>
                <tr>
                    <td>Observaciones</td>
                    <td><?php var_dump($observaciones); ?></td>
                </tr>
            </table>

            <p class="total">Total registrado: <?php echo MONEDA; ?> <?php echo $totalRegistrado; ?></p>
        </section>
    </main>

    <footer>
        <small><?php echo NEGOCIO; ?> - 2026</small>
    </footer>
</body>
</html>
