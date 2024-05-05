<?php include("../include/extra.inc.php") ?>
<?php include("../include/connect.inc.php") ?>

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
        <div class="text-white container border">
            <h1 class="text-center">Modificar Jugador</h1>
            <hr>
            <?php
            while ($registro = $tabla->fetch_assoc()) {
            ?>
                <form method="POST" action="stats_sql.php?opcion=update&id=<?php echo $registro["id"] ?>">
                    <div class="mb-3">
                        <label for="marca" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $registro["Nombre"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Posición</label>
                        <input type="text" class="form-control" id="Posición" name="Posición" value="<?php echo $registro["Posición"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Afinidad</label>
                        <input type="text" class="form-control" id="Afinidad" name="Afinidad" value="<?php echo $registro["Afinidad"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="potencia" class="form-label">Equipo</label>
                        <input type="text" class="form-control" id="Equipo" name="Equipo" value="<?php echo $registro["Equipo"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="maletero" class="form-label">PATADA</label>
                        <input type="text" class="form-control" id="PATADA" name="PATADA" value="<?php echo $registro["PATADA"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">TÉCNICA</label>
                        <input type="text" class="form-control" id="TÉCNICA" name="TÉCNICA" value="<?php echo $registro["TÉCNICA"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">CONTROL</label>
                        <input type="text" class="form-control" id="CONTROL" name="CONTROL" value="<?php echo $registro["CONTROL"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">INTELIGENCIA</label>
                        <input type="text" class="form-control" id="INTELIGENCIA" name="INTELIGENCIA" value="<?php echo $registro["INTELIGENCIA"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">PRESIÓN</label>
                        <input type="text" class="form-control" id="PRESIÓN" name="PRESIÓN" value="<?php echo $registro["PRESIÓN"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">AGILIDAD</label>
                        <input type="text" class="form-control" id="AGILIDAD" name="AGILIDAD" value="<?php echo $registro["AGILIDAD"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">FÍSICO</label>
                        <input type="text" class="form-control" id="FÍSICO" name="FÍSICO" value="<?php echo $registro["FÍSICO"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $registro["Descripcion"] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Aplicar cambios</button>
                    <a href="../paginas/adminedit.php" class="btn btn-danger">Volver al listado</a>
                <?php
            }
                ?>
                </form>
        </div>
    </main>


</body>

</html>