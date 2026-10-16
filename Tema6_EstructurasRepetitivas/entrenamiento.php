
<?php
$nombreRutina = "Full Body Training";
$nivel = "Nivel principiante";
$duracionTotal = 15;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitRoutine | Planificador</title>
    <link rel="stylesheet" href="entrenamiento.css">
</head>
<body>

    <header class="encabezado">
        <div class="logo">F<span>R</span></div>
        <div>
            <h1>FitRoutine</h1>
            <p>Tu entrenamiento, organizado.</p>
        </div>
        <span class="etiqueta">PLAN DE HOY</span>
    </header>

    <main class="contenedor">

        <section class="bienvenida">
            <div>
                <p class="subtitulo">TU PLAN DE ENTRENAMIENTO</p>
                <h2><?php echo $nombreRutina; ?></h2>
                <p class="descripcion">
                    Una rutina de cinco estaciones para activar todo el cuerpo.
                </p>
                <span class="nivel"><?php echo $nivel; ?></span>
            </div>

            <div class="icono-principal">🏋️</div>
        </section>

        <section class="resumen">
            <div class="dato">
                <span>ESTACIONES</span>
                <strong>05</strong>
            </div>
            <div class="dato">
                <span>DURACIÓN</span>
                <strong><?php echo $duracionTotal; ?> min</strong>
            </div>
            <div class="dato">
                <span>OBJETIVO</span>
                <strong>Actividad física</strong>
            </div>
        </section>

        <section class="seccion-rutina">
            <div class="titulo-seccion">
                <div>
                    <h2>Tu rutina</h2>
                    <p>Sigue cada estación en orden.</p>
                </div>
                <span class="contador">05 EJERCICIOS</span>
            </div>

            <div class="lista-ejercicios">

                <?php
                for ($i = 1; $i <= 5; $i++) {

                    if ($i == 1) {
                        $ejercicio = "Calentamiento";
                        $detalle = "Prepara tu cuerpo para comenzar";
                        $duracion = "2 minutos";
                        $icono = "🔥";
                        $clase = "naranja";
                    } elseif ($i == 2) {
                        $ejercicio = "Sentadillas";
                        $detalle = "Activa piernas y glúteos";
                        $duracion = "3 minutos";
                        $icono = "🏃";
                        $clase = "azul";
                    } elseif ($i == 3) {
                        $ejercicio = "Flexiones";
                        $detalle = "Trabaja brazos y pecho";
                        $duracion = "3 minutos";
                        $icono = "💪";
                        $clase = "morado";
                    } elseif ($i == 4) {
                        $ejercicio = "Abdominales";
                        $detalle = "Fortalece la zona abdominal";
                        $duracion = "3 minutos";
                        $icono = "⚡";
                        $clase = "verde";
                    } else {
                        $ejercicio = "Estiramiento";
                        $detalle = "Relaja los músculos al finalizar";
                        $duracion = "4 minutos";
                        $icono = "🧘";
                        $clase = "rosa";
                    }
                ?>

                    <article class="tarjeta <?php echo $clase; ?>">
                        <div class="numero">
                            <?php echo $i; ?>
                        </div>

                        <div class="icono-ejercicio">
                            <?php echo $icono; ?>
                        </div>

                        <div class="informacion">
                            <h3><?php echo $ejercicio; ?></h3>
                            <p><?php echo $detalle; ?></p>
                        </div>

                        <div class="tiempo">
                            <strong><?php echo $duracion; ?></strong>
                            <span>Duración</span>
                        </div>
                    </article>

                <?php
                }
                ?>

            </div>
        </section>

        <footer class="pie">
            <p>FitRoutine · Mantente activo, mejora cada día.</p>
            <span>Rutina generada con PHP</span>
        </footer>

    </main>

</body>
</html>
