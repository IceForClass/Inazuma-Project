<?php
include("funciones.inc.php");

cabeceraHTML("Tablas en PHP");
?>

<body>
    <h1>Hola Html</h1>



    <!--  
    <table border="1">

        <?php
       /* $numeroFilas = 5;
        for ($i = 1; $i <= $numeroFilas; $i++) {

            ?>
            <tr>
                
                <td>
                    <?php echo $i; ?>
                </td>
            </tr>
            <?php 
        }*/
        ?>
    </table>

    <br>
    -->

    <form action="tabla.php" method="POST">
    Nº de filas:
    <input name="form_filas" size="3" value="<?php 
    if(isset($_POST["form_filas"])){
        echo $_POST["form_filas"];
    }
    ?>
    "type="text">
    Nº de columnas:
    <input name="form_columnas" size="3" value="<?php 
    if(isset($_POST["form_filas"])){
        echo $_POST["form_filas"];
    }
    ?>
    "type="text">
    <input value="Redibujar tabla" type="submit">
  </form>
<?php 
    if(!isset($_POST["form_columnas"]) || !isset($_POST["form_filas"])) {
?>
  <p>Rellena el formulario por dios</p>
  <?php 
    } else {
?>


    <table border="1">

    <?php

        if(isset($_POST["form_columnas"])){
        $numeroColumnas = $_POST["form_columnas"];
    } else{
        $numeroColumnas = 5;
    }
    if(isset($_POST["form_filas"])){
        $numeroFilas = $_POST["form_filas"];
    } else{
        $numeroFilas = 5;
    }
        ?>
        <th colspan="<?php echo "$numeroFilas"; ?>"> Cabecera</th>
        <?php     
        for ($i = 1; $i <= $numeroColumnas; $i++) {
            ?>
            <tr>
            <?php
                    for ($j = 1; $j <= $numeroFilas; $j++) {
            ?>
                <td>
                    <?php echo $i*$j; ?>
                </td>
                <?php
                }
            ?>

            </tr>
            <?php
        }
        ?>


    </table>
    <?php 
}
?>

</body>

</html>