<?php
// Constantes: información fija del negocio.
define("EMPRESA", "TechFix");
define("MONEDA", "S/");

// Variables: información de la orden de servicio.
$numeroOrden = 1042;                      // int
$cliente = "Camila Rojas";                // string
$equipo = "Laptop Lenovo IdeaPad";        // string
$servicio = "Mantenimiento preventivo";   // string
$costo = 120.50;                           // float
$completado = false;                       // bool
$fechaEntrega = null;                      // null
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo EMPRESA; ?> - Ficha de servicio</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #edf2f7;
            color: #263443;
        }

        header, footer {
            background: #173b63;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 760px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        h2 {
            color: #173b63;
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
            padding: 12px;
            border: 1px solid #d5dee8;
            text-align: left;
        }

        th {
            background: #e8f2ff;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo EMPRESA; ?></h1>
        <p>Registro de mantenimiento de computadoras</p>
    </header>

    <main>
        <section>
            <h2>Ficha de servicio técnico</h2>
            <div class="portada">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80" alt="Laptop y herramientas sobre una mesa de mantenimiento">
            </div>
            <p>Datos registrados de la orden de mantenimiento. La ficha presenta la información del cliente, el equipo y el servicio mediante variables y constantes de PHP.</p>

            <table>
                <tr>
                    <th>Dato</th>
                    <th>Información</th>
                </tr>
                <tr>
                    <td>Número de orden</td>
                    <td><?php echo $numeroOrden; ?></td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td><?php echo $cliente; ?></td>
                </tr>
                <tr>
                    <td>Equipo</td>
                    <td><?php echo $equipo; ?></td>
                </tr>
                <tr>
                    <td>Servicio</td>
                    <td><?php echo $servicio; ?></td>
                </tr>
                <tr>
                    <td>Costo estimado</td>
                    <td><?php echo MONEDA; ?> <?php echo $costo; ?></td>
                </tr>
                <tr>
                    <td>Servicio completado</td>
                    <td><?php var_dump($completado); ?></td>
                </tr>
                <tr>
                    <td>Fecha de entrega</td>
                    <td><?php var_dump($fechaEntrega); ?></td>
                </tr>
            </table>

            <p><strong>Nota:</strong> El servicio aún no está completado y la fecha de entrega todavía no está definida.</p>
        </section>
    </main>

    <footer>
        <small><?php echo EMPRESA; ?> - 2026</small>
    </footer>
</body>
</html>
