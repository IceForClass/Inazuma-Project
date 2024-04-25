<?php
include("connect.inc.php");
$mysql = new mysqli("localhost", "root", "", "inazuma", 3307); // XAMPP

switch ($_GET["opcion"]) {
    case "borrar":
        if (isset($_GET["opcion"]) && $_GET["opcion"] == "borrar") {
            $sql = "DELETE FROM jugadores WHERE id=" . $_GET["id"];
            $mysql->query($sql);
        }
        break;

}

header("location:../paginas/adminedit.php");
exit();