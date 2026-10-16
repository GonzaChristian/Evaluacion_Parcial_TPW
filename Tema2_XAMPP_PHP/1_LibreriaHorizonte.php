<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Horizonte | Catálogo</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f4ef;
            color: #302b27;
        }

        .contenedor {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        header, footer {
            background: #552e32;
            color: white;
            padding: 18px 0;
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
            font-family: Georgia, serif;
            font-size: 38px;
        }

        .portada img {
            width: 45%;
            height: 260px;
            object-fit: cover;
        }

        .boton {
            display: inline-block;
            background: #a45540;
            color: white;
            padding: 12px 20px;
        }

        .libros {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 18px;
            margin: 25px 0 50px;
        }

        .libro {
            background: white;
            border: 1px solid #ddd;
            padding: 12px;
        }

        .libro img {
            width: 100%;
            height: 240px;
            object-fit: contain;
            background: #f7f4ef;
        }

        .precio {
            color: #93422e;
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
            <h2>Librería Horizonte</h2>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#catalogo">Libros</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="contenedor portada" id="inicio">
            <div>
                <h1>Descubre tu próxima lectura</h1>
                <p>Conoce nuestras recomendaciones literarias. Consulta títulos, autores y precios desde un solo lugar.</p>
                <a class="boton" href="#catalogo">Ver catálogo</a>
            </div>
            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="Estantes llenos de libros en una biblioteca">
        </section>

        <section class="contenedor catalogo" id="catalogo">
            <h2>Libros destacados</h2>
            <p>Una selección de obras para todos los lectores.</p>

            <div class="libros">
                <article class="libro">
                    <img src="https://www.penguinlibros.com/pe/7401363-large_default/el-principito-edicion-original.webp" alt="Portada de El principito">
                    <?php
                        echo '<h3>El principito</h3>';
                        echo '<p>Antoine de Saint-Exupéry</p>';
                        echo '<p>Género: Narrativa</p>';
                        echo '<strong class="precio">S/ 35.00</strong>';
                    ?>
                </article>

                <article class="libro">
                    <img src="https://images.cdn2.buscalibre.com/fit-in/360x360/4d/90/4d906c151cd231aa1d3e3664303c3f95.jpg" alt="Portada de Los ríos profundos">
                    <?php
                        echo '<h3>Los ríos profundos</h3>';
                        echo '<p>José María Arguedas</p>';
                        echo '<p>Género: Novela</p>';
                        echo '<strong class="precio">S/ 42.00</strong>';
                    ?>
                </article>

                <article class="libro">
                    <img src="https://images.cdn2.buscalibre.com/fit-in/660x660/73/b6/73b6fd96c31d26e2b6a3531808c1188c.jpg" alt="Portada de Don Quijote de la Mancha">
                    <?php
                        echo '<h3>Don Quijote de la Mancha</h3>';
                        echo '<p>Miguel de Cervantes</p>';
                        echo '<p>Género: Clásico</p>';
                        echo '<strong class="precio">S/ 55.00</strong>';
                    ?>
                </article>

                <article class="libro">
                    <img src="https://images.cdn2.buscalibre.com/fit-in/660x660/04/97/0497843aaba916128e3617a02b9a7583.jpg" alt="Portada de La ciudad y los perros">
                    <?php
                        echo '<h3>La ciudad y los perros</h3>';
                        echo '<p>Mario Vargas Llosa</p>';
                        echo '<p>Género: Novela</p>';
                        echo '<strong class="precio">S/ 48.00</strong>';
                    ?>
                </article>
            </div>
        </section>
    </main>

    <footer id="contacto">
        <div class="contenedor">
            <p>Librería Horizonte · Lima, Perú</p>
            <p>Correo: contacto@libreriahorizonte.example</p>
        </div>
    </footer>
</body>
</html>
