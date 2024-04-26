<?php include("../include/extra.inc.php") ?>
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
            <h1 class="text-center">Añadir Jugador</h1>
            <hr>
            <form class="mb-2" method="POST" action="stats_sql.php?opcion=add">
                <div class="mb-3">
                    <label for="marca" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" required value="">
                </div>
                <div class="mb-3">
                    <label for="posicion" class="form-label">Posición</label>
                    <select class="form-select" id="posicion" name="posicion" required>
                        <option value="Delantero">Delantero</option>
                        <option value="Centrocampista">Centrocampista</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Portero">Portero</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="afinidad" class="form-label">Afinidad</label>
                    <select class="form-select" id="afinidad" name="afinidad" required>
                        <option value="Fuego">Fuego</option>
                        <option value="Aire">Aire</option>
                        <option value="Bosque">Bosque</option>
                        <option value="Montaña">Montaña</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="potencia" class="form-label">Equipo</label>
                    <input type="text" class="form-control" id="Equipo" name="Equipo" required value="">
                </div>
                <div class="mb-3">
                    <label for="maletero" class="form-label">PATADA</label>
                    <input type="text" class="form-control" id="PATADA" name="PATADA" required value="">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">TÉCNICA</label>
                    <input type="text" class="form-control" id="TÉCNICA" name="TÉCNICA" required value="">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">CONTROL</label>
                    <input type="text" class="form-control" id="CONTROL" name="CONTROL" required value="">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">INTELIGENCIA</label>
                    <input type="text" class="form-control" id="INTELIGENCIA" name="INTELIGENCIA" required value="">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">PRESIÓN</label>
                    <input type="text" class="form-control" id="PRESIÓN" name="PRESIÓN" required value="">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">AGILIDAD</label>
                    <input type="text" class="form-control" id="AGILIDAD" name="AGILIDAD" required value="">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">FÍSICO</label>
                    <input type="text" class="form-control" id="FÍSICO" name="FÍSICO" required value="">
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

    <?php footerHTML(); ?>


</body>

</html>