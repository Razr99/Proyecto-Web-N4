<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MF Publicidad | Cotizaciones</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="shortcut icon" href="../img/logo.jpg">
</head>
<body>
    <?php
        session_start();
        session_destroy();

            if (isset($_SESSION['u_correo'])){ 
            }
            else { header("Location: error/noinicio.html");
            }
    ?>
    <header>
        <div class="contenedor">
            <div class="logo">
                <a href="../index.html"><img src="../img/logo.jpg" alt="Logo" title="Inicio" width="80px"></a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a title="Contactanos" class="menu1" href="../contacto.html">Contacto</a></li>
                    <li><a title="Nuestros servicios" class="menu1 submenu icon-angle-down" href="../servicios.php">Servicios</a>
                        <ul>
                            <li><a title="Impresión Digital" href="../impresion_digital.html">Impresión Digital</a></li>
                            <li><a title="Diseño Gráfico y Social" href="../diseño_grafico.html">Diseño Gráfico y Social</a></li>
                            <li><a title="Artículos Promocionales" href="../art_promocionales.html">Artículos Promocionales</a></li>
                            <li id="ultimo-menu"><a title="Cotizaciones" href="../cotizaciones.html">Cotizaciones</a></li>
                        </ul>
                    </li>
                    <li><a title="Informacion acerda de nosotros" class="menu1" href="../nosotros.html">Nosotros</a></li>
                    <li><a title="Inicio" class="menu1" href="../index.html">Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article>
        <h1>Mi Cuenta</h1>
        <h2>Aqui vendra la info de la cuenta y su carrito de compras</h2>
        <br>
        <br>
        <br>
        <img align="center" width="600px" heigth="500px" src="../img/carga.gif" alt="">
        <br>
        <h1>Fuera de servicio temporalmente</h1>
        <br>
        <br>
        <a href="cerrarsesion.php"><input type="button" value="Cerrar Sesion"></a>
    </article>
    <footer>

    </footer>
</body>
</html>