<section>
            <table class="lista">
                <thead class="lista_cabecera">
                    <tr>
                        <th><a href="registrar.php">Añadir</a></th>
                        <th>Lista de Usuarios</th>
                    </tr>
                </thead>
                <tbody class="lista_cuerpo">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Correo</td>
                        <td>Telefono</td>
                        <td>Modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    <?php
                        include("conexion.php");

                        $query = "SELECT * FROM usuarios";
                        $resultado = $conn -> query($query);
                        while($row = $resultado -> fetch_assoc() ){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td><a href="#">Modificar</a></td>
                        <td><a href="#">Eliminar</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>           
            </table>
    </section>