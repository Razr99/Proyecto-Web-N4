<main class="formulario">
    <img class="formulario_img" src="" alt="" srcset="">
    <form class="formulario_tabla" method="post" action="Registrar.php">
        <div class="formulario_titulo"><h2>Vamos a Registrarte</h2></div>
        <div class="formulario_nombre"><label for="nombre">Nombre:<br><input class="formulario_captura" type="text" name="nombre" maxlength="16" placeholder="Nombre" required ></label></div>
        <div class="formulario_apellido"><label for="apellido">Apellido:<br><input class="formulario_captura" type="text" name="apellido" maxlength="16" placeholder="Apellido" required></label></div>
        <div class="formulario_correo"><label for="correo">Correo:<br><input class="formulario_captura" type="email" name="correo" placeholder="Correo" required></label></div>
        <div class="formulario_psw"><label for="contraseña">Contraseña:<br><input class="formulario_captura" type="password" name="contraseña" placeholder="Contraseña" required></label></div>
        <div class="formulario_tel"><label for="telefono">Telefono<br><input class="formulario_captura" type="int" name="telefono" placeholder="a 10 digitos" required></label></div>
        <div class="formulario_boton"><input class="formulario_btn" value="Enviar" type="submit"></div>
    </form>
</main>