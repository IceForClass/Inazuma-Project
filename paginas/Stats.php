<?php include ("../include/extra.inc.php") ?>
<?php include ("../include/connect.inc.php") ?>
<?php // include("../include/stats.inc.php") 
?>

<?php headHTML(); ?>

<body class="bg-dark">
    <?php headerHTML();
    $mysql = connectDB();
    // order($mysql); Esta cosa todavía no funciona así que no se puede refactorizar aún


    if (!isset($_GET["orderby"])) {
        $consulta = "SELECT * FROM jugadores";
        $tabla_equipos = $mysql->query($consulta);
    } else {
        switch ($_GET["orderby"]) {
            case "nombre":
                $consulta = "SELECT * FROM jugadores order by nombre";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "posicion":
                $consulta = "SELECT * FROM jugadores order by Posición";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "afinidad":
                $consulta = "SELECT * FROM jugadores order by Afinidad";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "equipo":
                $consulta = "SELECT * FROM jugadores order by Equipo";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "patada":
                $consulta = "SELECT * FROM jugadores order by PATADA desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "tecnica":
                $consulta = "SELECT * FROM jugadores order by TÉCNICA desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "control":
                $consulta = "SELECT * FROM jugadores order by CONTROL desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "inteligencia":
                $consulta = "SELECT * FROM jugadores order by INTELIGENCIA desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "presion":
                $consulta = "SELECT * FROM jugadores order by PRESIÓN desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "agilidad":
                $consulta = "SELECT * FROM jugadores order by AGILIDAD desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "fisico":
                $consulta = "SELECT * FROM jugadores order by FÍSICO desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
            case "total":
                $consulta = "SELECT * FROM jugadores order by TOTAL desc";
                $tabla_equipos = $mysql->query($consulta);
                break;
        }
    }


    ?>

    <main>
        <div class="container d-flex justify-content-center">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered text-center align-middle">
                    <thead>
                        <!--Cabeza de la tabla-->
                        <tr>
                            <th scope="col">Jugador</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=nombre">Nombre</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=posicion">Posición</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=afinidad">Afinidad</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=equipo">Equipo</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=patada">PATADA</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=tecnica">TÉCNICA</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=control">CONTROL</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=inteligencia">INTELIGENCIA</a>
                            </th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=presion">PRESIÓN</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=agilidad">AGILIDAD</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=fisico">FÍSICO</a></th>
                            <th scope="col"><a class="text-reset" href="Stats.php?orderby=total">TOTAL</a></th>
                            <th scope="col">Acciones</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($registro = $tabla_equipos->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><img src="../Imagenes/Alius/<?php echo $registro["Nombre"] ?>.png"
                                        alt="<?php echo $registro["Nombre"] ?>" width=100% height=100%></td>
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
                                        <a href="../include/stats_view.php?id=<?php echo $registro["id"] ?>"
                                            class="btn btn-primary mb-2">Ver</a>
                                        <?php
                                        if (isset($_SESSION["username"])) {
                                            ?>
                                            <a href="../include/stats_update.php?id=<?php echo $registro["id"] ?>"
                                                class="btn btn-warning mb-2">Editar</a>
                                            <a href="../include/stats_borrar.php?id=<?php echo $registro["id"] ?>"
                                                class="btn btn-danger">Borrar</a>
                                            <?php
                                        }
                                        ?>
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