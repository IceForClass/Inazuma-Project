<?php include("../include/index.inc.php") ?>
<?php include("../include/connect.inc.php") ?>

<?php headHTML(); ?>



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
                <form method="POST" action="stats_sql.php?opcion=add">
                    <div class="mb-3">
                        <label for="marca" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" value="">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Posición</label>
                        <input type="text" class="form-control" id="Posición" name="Posición" value="">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Afinidad</label>
                        <input type="text" class="form-control" id="Afinidad" name="Afinidad" value="">
                    </div>
                    <div class="mb-3">
                        <label for="potencia" class="form-label">Equipo</label>
                        <input type="text" class="form-control" id="Equipo" name="Equipo" value="">
                    </div>
                    <div class="mb-3">
                        <label for="maletero" class="form-label">PATADA</label>
                        <input type="text" class="form-control" id="PATADA" name="PATADA" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">TÉCNICA</label>
                        <input type="text" class="form-control" id="TÉCNICA" name="TÉCNICA" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">CONTROL</label>
                        <input type="text" class="form-control" id="CONTROL" name="CONTROL" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">INTELIGENCIA</label>
                        <input type="text" class="form-control" id="INTELIGENCIA" name="INTELIGENCIA" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">PRESIÓN</label>
                        <input type="text" class="form-control" id="PRESIÓN" name="PRESIÓN" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">AGILIDAD</label>
                        <input type="text" class="form-control" id="AGILIDAD" name="AGILIDAD" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">FÍSICO</label>
                        <input type="text" class="form-control" id="FÍSICO" name="FÍSICO" value="">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Aplicar cambios</button>
                    <a href="../paginas/adminedit.php" class="btn btn-danger">Volver al listado</a>
                </form>
        </div>
    </main>


</body>

</html>