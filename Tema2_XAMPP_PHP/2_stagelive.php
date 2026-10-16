<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StageLive | Conciertos y eventos</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #111827;
            color: #f3f4f6;
        }

        .contenedor {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        header, footer {
            background: #1f2937;
            padding: 16px 0;
        }

        .barra {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        nav a {
            margin-left: 15px;
        }

        .portada {
            display: flex;
            align-items: center;
            gap: 30px;
            padding: 40px 0;
        }

        .portada h1 {
            font-size: 38px;
        }

        .portada p, .evento p {
            color: #cbd5e1;
        }

        .portada img {
            width: 48%;
            height: 280px;
            object-fit: cover;
            border-radius: 8px;
        }

        .boton {
            display: inline-block;
            background: #e87941;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
        }

        .eventos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin: 25px 0 50px;
        }

        .evento {
            background: #1f2937;
            padding: 15px;
            border-radius: 8px;
        }

        .evento img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .precio {
            color: #fbbf24;
            font-size: 18px;
        }

        footer {
            text-align: center;
        }

        @media (max-width: 750px) {
            .portada {
                flex-direction: column;
            }

            .portada img {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="contenedor barra">
            <h2>StageLive</h2>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#conciertos">Conciertos</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="contenedor portada" id="inicio">
            <div>
                <h1>La música se vive en directo</h1>
                <p>Consulta los próximos conciertos, sus fechas, lugares y precios referenciales desde un solo sitio.</p>
                <a href="#conciertos" class="boton">Ver conciertos</a>
            </div>
            <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="Público disfrutando de un concierto con luces en el escenario">
        </section>

        <section class="contenedor" id="conciertos">
            <h2>Próximos conciertos</h2>
            <p>Cartelera de demostración con eventos ficticios.</p>

            <div class="eventos">
                <article class="evento">
                    <img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Concierto de música indie con público">
                    <?php
                        echo '<h3>Noche Indie</h3>';
                        echo '<p>Artista: Luz Norte</p>';
                        echo '<p>Fecha: 14 de noviembre de 2026</p>';
                        echo '<p>Lugar: Sala Aurora, Lima</p>';
                        echo '<strong class="precio">Desde S/ 45.00</strong>';
                    ?>
                </article>

                <article class="evento">
                    <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Escenario de música electrónica con luces de colores">
                    <?php
                        echo '<h3>Electro Fest</h3>';
                        echo '<p>Artista: DJ Nova</p>';
                        echo '<p>Fecha: 21 de noviembre de 2026</p>';
                        echo '<p>Lugar: Arena Sur, Lima</p>';
                        echo '<strong class="precio">Desde S/ 60.00</strong>';
                    ?>
                </article>

                <article class="evento">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&amp;fit=crop&amp;w=600&amp;q=80" alt="Festival musical con escenario iluminado">
                    <?php
                        echo '<h3>Rock en Vivo</h3>';
                        echo '<p>Artista: Ruta 7</p>';
                        echo '<p>Fecha: 28 de noviembre de 2026</p>';
                        echo '<p>Lugar: Centro Cultural, Lima</p>';
                        echo '<strong class="precio">Desde S/ 50.00</strong>';
                    ?>
                </article>
            </div>
        </section>
    </main>

    <footer id="contacto">
        <div class="contenedor">
            <p>StageLive · Lima, Perú</p>
            <p>Contacto: info@stagelive.example</p>
        </div>
    </footer>
</body>
</html>
