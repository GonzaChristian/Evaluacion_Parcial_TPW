
<?php

$Estudiantes = [
    "Carlos Mendoza",
    "Lucia Torres",
    "Diego Ramirez",
    "Valeria Flores",
    "Andres Castillo",
    "Camila Rojas",
    "Mateo Vargas",
    "Sofia Herrera"
];

$Asistencias = [
    "Presente",
    "Tardanza",
    "Presente",
    "Ausente",
    "Presente",
    "Presente",
    "Ausente",
    "Tardanza"
];

$Presentes = 0;
$Ausentes = 0;
$Tardanzas = 0;

$Cantidad = count($Estudiantes);

for ($I = 0; $I < $Cantidad; $I++) {
    if ($Asistencias[$I] == "Presente") {
        $Presentes++;
    } elseif ($Asistencias[$I] == "Ausente") {
        $Ausentes++;
    } else {
        $Tardanzas++;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassCheck | Asistencia</title>
    <link rel="stylesheet" href="asistencia.css">
</head>
<body>

    <header class="encabezado">
        <div class="marca">
            <div class="logo">CC</div>
            <div>
                <h1>ClassCheck</h1>
                <p>Control de asistencia estudiantil</p>
            </div>
        </div>
        <span class="etiqueta">PANEL ACADÉMICO</span>
    </header>

    <main class="contenedor">

        <section class="bienvenida">
            <div>
                <p class="sobre-titulo">REGISTRO DE CLASE</p>
                <h2>Asistencia del aula</h2>
                <p class="descripcion">
                    Resumen de asistencia de los estudiantes.
                </p>
            </div>

            <div class="grupo">
                <span>GRUPO</span>
                <strong>CI II-A</strong>
            </div>
        </section>

        <section class="resumen">

            <article class="tarjeta total">
                <p>Total de estudiantes</p>
                <h3><?php echo $Cantidad; ?></h3>
                <span>Registrados en la lista</span>
            </article>

            <article class="tarjeta presente">
                <p>Presentes</p>
                <h3><?php echo $Presentes; ?></h3>
                <span>Asistencia confirmada</span>
            </article>

            <article class="tarjeta tardanza">
                <p>Tardanzas</p>
                <h3><?php echo $Tardanzas; ?></h3>
                <span>Llegada fuera de hora</span>
            </article>

            <article class="tarjeta ausente">
                <p>Ausentes</p>
                <h3><?php echo $Ausentes; ?></h3>
                <span>Sin asistencia</span>
            </article>

        </section>

        <section class="panel">

            <div class="panel-titulo">
                <div>
                    <h2>Lista de estudiantes</h2>
                    <p>Detalle del estado de asistencia</p>
                </div>

                <span class="contador">
                    <?php echo $Cantidad; ?> registros
                </span>
            </div>

            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>N.º</th>
                            <th>Estudiante</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        for ($I = 0; $I < $Cantidad; $I++) {

                            if ($Asistencias[$I] == "Presente") {
                                $Clase = "estado-presente";
                            } elseif ($Asistencias[$I] == "Ausente") {
                                $Clase = "estado-ausente";
                            } else {
                                $Clase = "estado-tardanza";
                            }
                        ?>

                        <tr>
                            <td class="numero">
                                <?php echo $I + 1; ?>
                            </td>

                            <td class="nombre">
                                <?php echo $Estudiantes[$I]; ?>
                            </td>

                            <td>
                                <span class="estado <?php echo $Clase; ?>">
                                    <?php echo $Asistencias[$I]; ?>
                                </span>
                            </td>
                        </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="nota">
                <span class="punto"></span>
                <p>Datos ficticios para la demostración académica.</p>
            </div>

        </section>

    </main>

    <footer>
        ClassCheck <span>·</span> Vectores y ciclos en PHP
    </footer>

</body>
</html>
