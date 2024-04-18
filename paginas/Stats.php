<?php include("../include/index.inc.php") ?>

<?php headHTML(); ?>

<body class="bg-dark">
    <?php headerHTML(); 
    
    $mysql = new mysqli("localhost", "root", "", "", 3307); // XAMPP

    $mysql->select_db("inazuma");
    $consulta = "SELECT * FROM jugadores";

    $tabla_equipos = $mysql->query($consulta);


    ?>

    <main>
        <div class="container d-flex justify-content-center">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered text-center rounded">
                    <thead>
                        <!--Cabeza de la tabla-->
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Posición</th>
                            <th scope="col">Afinidad</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">PATADA</th>
                            <th scope="col">TÉCNICA</th>
                            <th scope="col">CONTROL</th>
                            <th scope="col">INTELIGENCIA</th>
                            <th scope="col">PRESIÓN</th>
                            <th scope="col">AGILIDAD</th>
                            <th scope="col">FÍSICO</th>
                            <th scope="col">TOTAL</th>
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