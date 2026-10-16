
<?php
$Inventario = [
    ["P001", "Teclado mecanico", 145.50, 10],
    ["P002", "Mouse inalambrico", 85.90, 3],
    ["P003", "Monitor", 850.00, 0],
    ["P004", "Audifonos gamer", 129.90, 7],
    ["P005", "Memoria USB", 35.00, 0]
];

$Cantidad = count($Inventario);
$Disponibles = 0;
$Agotados = 0;

for ($I = 0; $I < $Cantidad; $I++) {
    if ($Inventario[$I][3] > 0) {
        $Disponibles++;
    } else {
        $Agotados++;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStock | Inventario</title>
    <link rel="stylesheet" href="inventario.css">
</head>
<body>

<div class="contenedor">

    <header class="encabezado">
        <div>
            <p class="etiqueta">GESTION TECNOLOGICA</p>
            <h1>TechStock</h1>
            <p class="subtitulo">Inventario de productos tecnologicos</p>
        </div>
        <div class="icono">TS</div>
    </header>

    <section class="resumen">

        <div class="tarjeta">
            <p>Total de productos</p>
            <h2><?php echo $Cantidad; ?></h2>
            <span>Registrados en inventario</span>
        </div>

        <div class="tarjeta">
            <p>Disponibles</p>
            <h2 class="verde"><?php echo $Disponibles; ?></h2>
            <span>Con unidades en stock</span>
        </div>

        <div class="tarjeta">
            <p>Agotados</p>
            <h2 class="rojo"><?php echo $Agotados; ?></h2>
            <span>Sin unidades disponibles</span>
        </div>

    </section>

    <section class="panel">
        <div class="titulo-panel">
            <div>
                <h2>Lista de productos</h2>
                <p>Detalle de existencias y precios</p>
            </div>
            <span class="contador"><?php echo $Cantidad; ?> productos</span>
        </div>

        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                for ($I = 0; $I < $Cantidad; $I++) {

                    if ($Inventario[$I][3] > 0) {
                        $Estado = "Disponible";
                        $Clase = "disponible";
                    } else {
                        $Estado = "Agotado";
                        $Clase = "agotado";
                    }
                ?>

                    <tr>
                        <td class="codigo">
                            <?php echo $Inventario[$I][0]; ?>
                        </td>

                        <td class="producto">
                            <?php echo $Inventario[$I][1]; ?>
                        </td>

                        <td>
                            S/ <?php echo number_format($Inventario[$I][2], 2); ?>
                        </td>

                        <td><?php echo $Inventario[$I][3]; ?> unidades</td>

                        <td>
                            <span class="estado <?php echo $Clase; ?>">
                                <?php echo $Estado; ?>
                            </span>
                        </td>
                    </tr>

                <?php
                }
                ?>

                </tbody>
            </table>
        </div>

        <p class="nota">
            El estado de cada producto depende de la cantidad registrada en stock.
        </p>
    </section>

    <footer>
        TECHSTOCK <span>•</span> Sistema de inventario demostrativo
    </footer>

</div>

</body>
</html>
