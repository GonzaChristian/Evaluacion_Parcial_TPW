
<?php
$dispositivo = "Laptop";
$bateria = 20;
$objetivo = 100;
$incremento = 10;
$paso = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChargeTrack | Monitor de batería</title>
    <link rel="stylesheet" href="bateria.css">
</head>
<body>

    <header class="encabezado">
        <div class="logo">CT</div>
        <div>
            <h1>ChargeTrack</h1>
            <p>Monitor de energía del dispositivo</p>
        </div>
        <span class="etiqueta">SIMULACIÓN</span>
    </header>

    <main class="contenedor">

        <section class="presentacion">
            <p class="subtitulo">CENTRO DE ENERGÍA</p>
            <h2>Estado de la batería</h2>
            <p>Consulta el progreso del proceso de carga.</p>
        </section>

        <section class="panel-bateria">

            <div class="dispositivo">
                <div class="icono-bateria">
                    <div class="nivel-bateria"></div>
                </div>
                <div>
                    <span class="texto-secundario">DISPOSITIVO</span>
                    <h3><?php echo $dispositivo; ?></h3>
                </div>
            </div>

            <div class="porcentaje">
                <?php echo $bateria; ?>%
            </div>

            <div class="barra">
                <div class="progreso"
                     style="width: <?php echo $bateria; ?>%;">
                </div>
            </div>

            <div class="datos-carga">
                <span>Carga inicial</span>
                <strong>20%</strong>
                <span class="objetivo">Objetivo</span>
                <strong>100%</strong>
            </div>

            <div class="estado">
                <span class="punto"></span>
                Simulación de carga completada
            </div>

        </section>

        <section class="seccion-historial">
            <div class="titulo-seccion">
                <div>
                    <h2>Historial de carga</h2>
                    <p>Registro de cada repetición del ciclo.</p>
                </div>
                <span class="etiqueta-historial">WHILE</span>
            </div>

            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>PASO</th>
                            <th>NIVEL DE BATERÍA</th>
                            <th>PROGRESO</th>
                            <th>ESTADO</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                    while ($bateria <= $objetivo) {

                        $paso++;

                        if ($bateria < $objetivo) {
                            $estado = "Cargando";
                            $claseEstado = "cargando";
                        } else {
                            $estado = "Completado";
                            $claseEstado = "completado";
                        }
                    ?>

                        <tr>
                            <td><?php echo $paso; ?></td>

                            <td class="porcentaje-tabla">
                                <?php echo $bateria; ?>%
                            </td>

                            <td>
                                <div class="barra-tabla">
                                    <div class="progreso-tabla"
                                         style="width: <?php echo $bateria; ?>%;">
                                    </div>
                                </div>
                            </td>

                            <td>
                                <span class="estado-tabla <?php echo $claseEstado; ?>">
                                    <?php echo $estado; ?>
                                </span>
                            </td>
                        </tr>

                    <?php
                        $bateria = $bateria + $incremento;
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </section>

        <section class="mensaje-final">
            <div class="icono-final">✓</div>
            <div>
                <h3>¡Carga completada!</h3>
                <p>El dispositivo alcanzó el nivel de batería establecido.</p>
            </div>
        </section>

        <footer class="pie">
            <span>ChargeTrack · Monitor de energía</span>
            <span>Ejemplo desarrollado con PHP y HTML5</span>
        </footer>

    </main>

</body>
</html>
