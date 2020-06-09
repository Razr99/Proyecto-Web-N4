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
        <h1>Editar ususario de la lista</h1>
        <h2>Formulario para modificar usuarios</h2>
    </article>
    <main class="formulario">
        <img class="formulario_img" src="" alt="" srcset="">

        <?php
                include("../conexion.php");

                $id = $_REQUEST['id'];

                $query ="SELECT * FROM usuarios WHERE id ='$id'";
                $resultado = $conn -> query($query);
                $row = $resultado -> fetch_assoc();
        ?>

        <form class="formulario_tabla" method="post" action="proseditusu.php?id=<?php echo $row['id']; ?>">
            <div class="formulario_titulo"><h2>Vamos a Registrarte</h2></div>
            <div class="formulario_nombre"><label for="nombre">Nombre:<br><input class="formulario_captura" type="text" name="nombre" maxlength="16" placeholder="Nombre" required value="<?php echo $row['nombre']; ?>"></label></div>
            <div class="formulario_apellido"><label for="apellido">Apellido:<br><input class="formulario_captura" type="text" name="apellido" maxlength="16" placeholder="Apellido" required value="<?php echo $row['apellido']; ?>"></label></div>
            <div class="formulario_correo"><label for="correo">Correo:<br><input class="formulario_captura" type="email" name="correo" placeholder="Correo" required value="<?php echo $row['correo']; ?>"></label></div>
            <div class="formulario_tel"><label for="telefono">Telefono<br><input class="formulario_captura" type="int" name="telefono" placeholder="a 10 digitos" required value="<?php echo $row['telefono']; ?>"></label></div>
            <div class="formulario_boton"><input class="formulario_btn" value="Enviar" type="submit"></div>
        </form>
    </main>
        <a href="../cerrarsesion.php"><input type="button" value="Cerrar Sesion"></a>
    <footer>

    </footer>
</body>
</html>