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
                    <li><a title="Nuestros servicios" class="menu1 submenu icon-angle-down" href="../servicios.php">Servicios</a>
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
        <h1>Añadir Producto al catalogo</h1>
        <h2>Formulario para catalogo</h2>
    </article>
    <section class="catalogo">
        <div class="catalogo_formulario">
            <img class="formulario_img" src="" alt="" srcset="">
            <form class="formulario_tabla" method="post" action="../añadir.php" enctype="multipart/form-data">
                <div class="formulario_titulo"><h2>Añadir productos al catalogo</h2></div>
                <div class="formulario_nombre"><label for="nombre">Nombre:<br><input class="formulario_captura" type="text" name="nombre" maxlength="25" placeholder="Nombre" required ></label></div>
                <div class="formulario_apellido"><label for="descripcion">Descripcion:<br><input class="formulario_captura" type="text" name="descripcion" maxlength="225" placeholder="Descripcion" required></label></div>
                <div class="formulario_correo"><label for="precio">Precio:<br><input class="formulario_captura" type="int" name="precio" placeholder="Precio" required></label></div>
                <div class="formulario_psw"><label for="existencias">Existencias:<br><input class="formulario_captura" type="int" name="existencia" placeholder="Existencias" required></label></div>
                <div class="formulario_tel"><label for="img">Imagen:<br><input class="formulario_captura" type="file" name="img" required></label></div>
                <div class="formulario_boton"><input class="formulario_btn" value="Enviar" type="submit"></div>
            </form>
        </div>
    </section>
        <a href="../cerrarsesion.php"><input type="button" value="Cerrar Sesion"></a>
    <footer>

    </footer>
</body>
</html>