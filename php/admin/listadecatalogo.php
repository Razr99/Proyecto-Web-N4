<section>
            <table class="lista">
                <thead class="lista_cabecera">
                    <tr>
                        <th><a href="añadcat.php">Añadir</a></th>
                        <th>Lista de Usuarios</th>
                    </tr>
                </thead>
                <tbody class="lista_cuerpo">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Precio</td>
                        <td>Existencias</td>
                        <td>Imagen</td>
                        <td>Modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    <?php
                        include("../conexion.php");

                        $query = "SELECT * FROM catalogo";
                        $resultado = $conn -> query($query);
                        while($row = $resultado -> fetch_assoc() ){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><?php echo $row['existencia']; ?></td>
                        <td><img width="300px" height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>" alt="Imagen"></td>
                        <td><a href="editcat.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                        <td><a href="elimcat.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>           
            </table>
    </section>