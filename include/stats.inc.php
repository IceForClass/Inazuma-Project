<?php include("connect.inc.php") ?>

<?php
function order($mysql){
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
        return $tabla_equipos;
    }

} 
?>