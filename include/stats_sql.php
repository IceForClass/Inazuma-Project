<?php
include ("connect.inc.php");
$mysql = connectDB();

switch ($_GET["opcion"]) {
    case "borrar":
        if ($_GET["opcion"] == "borrar") {
            $sql = "DELETE FROM jugadores WHERE id=" . $_GET["id"];
            $mysql->query($sql);
        }
        break;
    case "update":
        if ($_GET["opcion"] == "update") {
            $Nombre = $_POST["Nombre"];
            $Posición = $_POST["Posición"];
            $Afinidad = $_POST["Afinidad"];
            $Equipo = $_POST["Equipo"];
            $PATADA = $_POST["PATADA"];
            $TÉCNICA = $_POST["TÉCNICA"];
            $CONTROL = $_POST["CONTROL"];
            $INTELIGENCIA = $_POST["INTELIGENCIA"];
            $PRESIÓN = $_POST["PRESIÓN"];
            $AGILIDAD = $_POST["AGILIDAD"];
            $FÍSICO = $_POST["FÍSICO"];
            $TOTAL = $PATADA + $TÉCNICA + $CONTROL + $INTELIGENCIA + $PRESIÓN + $AGILIDAD + $FÍSICO;
            $Descripcion = $_POST["Descripcion"];

            // Consulta SQL corregida
            $sql = "UPDATE jugadores SET 
                        Nombre = '$Nombre',
                        Posición = '$Posición',
                        Afinidad = '$Afinidad',
                        Equipo = '$Equipo',
                        PATADA = $PATADA,
                        TÉCNICA = $TÉCNICA,
                        CONTROL = $CONTROL,
                        INTELIGENCIA = $INTELIGENCIA,
                        PRESIÓN = $PRESIÓN,
                        AGILIDAD = $AGILIDAD,
                        FÍSICO = $FÍSICO,
                        TOTAL = $TOTAL,
                        Descripcion = '$Descripcion'
                        WHERE id=" . $_GET["id"];
            $mysql->query($sql);
        }
        break;
    case "add":
        $Nombre = $_POST["Nombre"];
        $Posición = $_POST["Posición"];
        $Afinidad = $_POST["Afinidad"];
        $Equipo = $_POST["Equipo"];
        $PATADA = $_POST["PATADA"];
        $TÉCNICA = $_POST["TÉCNICA"];
        $CONTROL = $_POST["CONTROL"];
        $INTELIGENCIA = $_POST["INTELIGENCIA"];
        $PRESIÓN = $_POST["PRESIÓN"];
        $AGILIDAD = $_POST["AGILIDAD"];
        $FÍSICO = $_POST["FÍSICO"];
        $TOTAL = $PATADA + $TÉCNICA + $CONTROL + $INTELIGENCIA + $PRESIÓN + $AGILIDAD + $FÍSICO;
        $Descripcion = $_POST["Descripcion"];

        $sql = "INSERT INTO jugadores(Nombre, Posición, Afinidad, Equipo, PATADA, TÉCNICA, CONTROL, INTELIGENCIA, PRESIÓN, AGILIDAD, FÍSICO, TOTAL, Descripcion) VALUES
                ('$Nombre', 
                '$Posición', 
                '$Afinidad', '$Equipo', 
                $PATADA, $TÉCNICA, 
                $CONTROL, $INTELIGENCIA, 
                $PRESIÓN,  $AGILIDAD, 
                $FÍSICO, $TOTAL, '$Descripcion')";

        $mysql->query($sql);
        break;


}

header("location:../paginas/adminedit.php");
exit();
