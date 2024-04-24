<?php include("../include/index.inc.php") ?>
<?php include("../include/connect.inc.php") ?>
<?php // include("../include/stats.inc.php") ?>

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
                            <th scope="col"><a href="Stats.php?orderby=nombre">Nombre</a></th>
                            <th scope="col"><a href="Stats.php?orderby=posicion">Posición</a></th>
                            <th scope="col"><a href="Stats.php?orderby=afinidad">Afinidad</a></th>
                            <th scope="col"><a href="Stats.php?orderby=equipo">Equipo</a></th>
                            <th scope="col"><a href="Stats.php?orderby=patada">PATADA</a></th>
                            <th scope="col"><a href="Stats.php?orderby=tecnica">TÉCNICA</a></th>
                            <th scope="col"><a href="Stats.php?orderby=control">CONTROL</a></th>
                            <th scope="col"><a href="Stats.php?orderby=inteligencia">INTELIGENCIA</a></th>
                            <th scope="col"><a href="Stats.php?orderby=presion">PRESIÓN</a></th>
                            <th scope="col"><a href="Stats.php?orderby=agilidad">AGILIDAD</a></th>
                            <th scope="col"><a href="Stats.php?orderby=fisico">FÍSICO</a></th>
                            <th scope="col"><a href="Stats.php?orderby=total">TOTAL</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Cuerpo de la tabla-->
                        <?php
                        while ($registro = $tabla_equipos->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $registro["Nombre"] . "</td>";
                            echo "<td>" . $registro["Posición"] . "</td>";
                            echo "<td>" . $registro["Afinidad"] . "</td>";
                            echo "<td>" . $registro["Equipo"] . "</td>";
                            echo "<td>" . $registro["PATADA"] . "</td>";
                            echo "<td>" . $registro["TÉCNICA"] . "</td>";
                            echo "<td>" . $registro["CONTROL"] . "</td>";
                            echo "<td>" . $registro["INTELIGENCIA"] . "</td>";
                            echo "<td>" . $registro["PRESIÓN"] . "</td>";
                            echo "<td>" . $registro["AGILIDAD"] . "</td>";
                            echo "<td>" . $registro["FÍSICO"] . "</td>";
                            echo "<td>" . $registro["TOTAL"] . "</td>";
                            echo "</tr>";
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