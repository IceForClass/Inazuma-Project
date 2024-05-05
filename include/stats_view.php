<?php include("../include/extra.inc.php") ?>
<?php include("connect.inc.php") ?>

<?php headHTML(); ?>

<?php
if (!isset($_GET["id"])) {
    header("location:../paginas/adminedit.php");
} else {
    $consulta = "SELECT * FROM jugadores WHERE id=" . $_GET["id"];
    $mysql = connectDB();
    $tabla = $mysql->query($consulta);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=º, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-dark">
    <?php headerHTML(); ?>

    <main>

        <div class="container text-center mb-2 text-white">
            <?php
            $foto = "SELECT Nombre, Descripcion FROM jugadores WHERE id=" . $_GET["id"];
            $fotoTabla = $mysql->query($foto);
            while ($foto = $fotoTabla->fetch_assoc()) {
            ?>
                <div class="card mx-auto rounded" style="width:400px">
                    <img src="../Imagenes/Alius/<?php echo $foto["Nombre"] ?>.png" alt="<?php echo $foto["Nombre"] ?> width=50%">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $foto["Nombre"] ?></h4>
                        <p class="card-text"><?php echo $foto["Descripcion"] ?></p>
                    </div>
                </div>

            <?php
            }

            ?>



        </div>
        <div class="container d-flex justify-content-center">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered text-center align-middle">
                    <thead>
                        <!--Cabeza de la tabla-->
                        <tr>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($registro = $tabla->fetch_assoc()) {
                        ?>
                            <tr>
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
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </main>


</body>

</html>