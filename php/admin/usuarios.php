<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MF Publicidad | Cotizaciones</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel="shortcut icon" href="../../img/logo.jpg">
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo">
                <a href="../../index.html"><img src="../../img/logo.jpg" alt="Logo" title="Inicio" width="80px"></a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a title="Contactanos" class="menu1" href="../../contacto.html">Contacto</a></li>
                    <li><a title="Nuestros servicios" class="menu1 submenu icon-angle-down" href="../../servicios.php">Servicios</a>
                        <ul>
                            <li><a title="Impresión Digital" href="../../impresion_digital.html">Impresión Digital</a></li>
                            <li><a title="Diseño Gráfico y Social" href="../../diseño_grafico.html">Diseño Gráfico y Social</a></li>
                            <li><a title="Artículos Promocionales" href="../../art_promocionales.html">Artículos Promocionales</a></li>
                            <li id="ultimo-menu"><a title="Cotizaciones" href="../../cotizaciones.html">Cotizaciones</a></li>
                        </ul>
                    </li>
                    <li><a title="Informacion acerda de nosotros" class="menu1" href="../../nosotros.html">Nosotros</a></li>
                    <li><a title="Inicio" class="menu1" href="../../index.html">Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article>
        <h1>Cuentas Registradas</h1>
        <h2>Indice de Cuentas</h2>
    </article>
    <?php
    include("listadeusuarios.php");
    ?>
        <a href="../cerrarsesion.php"><input type="button" value="Cerrar Sesion"></a>
    <footer>

    </footer>
</body>
</html>