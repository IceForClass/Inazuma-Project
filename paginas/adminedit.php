<?php include("../include/index.inc.php") ?>
<?php include("../include/connect.inc.php") ?>

<?php headHTML(); ?>

<body class="bg-dark">
    <?php headerHTML();
    $mysql = connectDB();
    $consulta = "SELECT * FROM jugadores order by Nombre";
    $tabla_equipos = $mysql->query($consulta);
    ?>

    <main>
    <a href="../include/stats_add.php"class="btn btn-success mb-2 justify-content-center">Añadir</a>
        <div class="container d-flex justify-content-center">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered text-center align-middle">
                    <thead>
                        <!--Cabeza de la tabla-->
                        <tr>
                            <th scope="col">jugador</a></th>
                            <th scope="col">Nombre</a></th>
                            <th scope="col">Posición</a></th>
                            <th scope="col">Afinidad</a></th>
                            <th scope="col">Equipo</a></th>
                            <th scope="col">PATADA</a></th>
                            <th scope="col">TÉCNICA</a></th>
                            <th scope="col">CONTROL</a></th>
                            <th scope="col">INTELIGENCIA</a></th>
                            <th scope="col">PRESIÓN</a></th>
                            <th scope="col">AGILIDAD</a></th>
                            <th scope="col">FÍSICO</a></th>
                            <th scope="col">TOTAL</a></th>
                            <th scope="col">Acciones</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($registro = $tabla_equipos->fetch_assoc()) {
                            ?>
                            <tr>
                            <td><img src="../Imagenes/Alius/<?php echo $registro["Nombre"] ?>.png" alt="<?php echo $registro["Nombre"] ?>" width=100% height=100%></td>
                            <td> <?php echo $registro["Nombre"] ?> </td>
                            <td> <?php echo $registro["Posición"] ?> </td>
                            <td> <?php echo $registro["Afinidad"] ?> </td>
                            <td> <?php echo $registro["Equipo"] ?> </td>
                            <td> <?php echo $registro["PATADA"] ?> </td>
                            <td> <?php echo $registro["TÉCNICA"] ?> </td>
                            <td> <?php echo $registro["CONTROL"] ?> </td>
                            <td> <?php echo $registro["INTELIGENCIA"] ?> </td>
                            <td> <?php echo $registro["PRESIÓN"] ?> </td>
                            <td> <?php echo $registro["AGILIDAD"] ?> </td>
                            <td> <?php echo $registro["FÍSICO"] ?> </td>
                            <td> <?php echo $registro["TOTAL"] ?> </td>
                            <td>
                                <div class="row container mx-auto">
                                    <a href="../include/stats_view.php?id=<?php echo $registro["id"]?>"class="btn btn-primary mb-2">Ver</a>
                                    <a href="../include/stats_update.php?id=<?php echo $registro["id"]?>" class="btn btn-warning mb-2">Editar</a>
                                    <a href="../include/stats_borrar.php?id=<?php echo $registro["id"]?>" class="btn btn-danger">Borrar</a>     
                                </div>                                        
                            </td>                                              
                            </tr>
                        <?php
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <?php footerHTML(); ?>

</body>

</html>