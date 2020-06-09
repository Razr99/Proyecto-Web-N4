<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MF Publicidad | Servicios</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="shortcut icon" href="img/logo.jpg">
    <script src="https://kit.fontawesome.com/74a0b75cb7.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo">
                <a href="index.html"><img src="img/logo.jpg" alt="Logo" title="Inicio" width="80px"></a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a title="Mi Cuenta" class="menu1" href="php/cuenta.php"><i class="fas fa-user-circle"></i>Mi Cuenta</a></li>
                    <li><a title="Contactanos" class="menu1" href="contacto.html">Contacto</a></li>
                    <li><a title="Nuestros servicios" class="menu1 submenu icon-angle-down" href="servicios.html">Servicios</a>
                        <ul>
                            <li><a title="Impresión Digital" href="impresion_digital.html">Impresión Digital</a></li>
                            <li><a title="Diseño Gráfico y Social" href="diseño_grafico.html">Diseño Gráfico y Social</a></li>
                            <li><a title="Artículos Promocionales" href="art_promocionales.html">Artículos Promocionales</a></li>
                            <li id="ultimo-menu"><a title="Cotizaciones" href="cotizaciones.html">Cotizaciones</a></li>
                        </ul>
                    </li>
                    <li><a title="Informacion acerda de nosotros" class="menu1" href="nosotros.html">Nosotros</a></li>
                    <li><a title="Inicio" class="menu1" href="index.html">Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?php
        include("php/catalogo.php");
    ?>

    <footer>
        <section>
            <div class="redes">
                <a href="https://www.facebook.com/MF-Publicidad-107383334062019/" class="icon-facebook" target="_blank"></a>
                <a href="https://www.instagram.com/mf.publicidad19/?hl=es-la" class="icon-instagram" target="_blank"></a>
            </div>
            <div class="contactos">
                <p>mf.publicidad19@gmail.com</p>
            </div>
        </section>
        <p>&copy; 2020</p>
    </footer>
    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
</body>
</html>