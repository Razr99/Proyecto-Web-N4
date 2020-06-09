            <div class="contenedor-tarjetas">
                <div class="container">
                    <?php
                        include("conexion.php");

                            $sql = "SELECT * FROM catalogo";
                            $resultado = $conn -> query($sql);
                            while($row = $resultado -> fetch_assoc() ){        
                    ?>
                    <section class="tarjeta">
                    <div class="face face1">
                        <div class="content">
                            <img src="" alt="Imagen">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3><?php echo $row ['nombre'] ; ?></h3>
                            <h4>Modelo: <?php echo $row['id']; ?></h4>
                            <p>Descripcion:<?php echo $row['descripcion'] ; ?></p>
                            <a href="#">Precio:<?php echo $row['precio'] ; ?></a>
                            <a href="#">Almacen:<?php echo $row['existencia'] ; ?></a>
                        </div>
                    </div>
                    </section>
                    <?php
                            }
                    ?>
                </div>
            </div>