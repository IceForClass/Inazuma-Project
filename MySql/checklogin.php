<?php
    session_start();
    $usuario = addcslashes($_POST["usuario"], "'+\?¿@");
    $password = md5 (addcslashes($_POST["password"], "'\?¿@"));

    // Consultar a una base de datos

    $bd = new mysqli("localhost:3307","root","","inazuma");
    $sql = "select * from usuarios where username like '$usuario' and password like '$password' ";
    $result = $bd->query($sql);

    if ($result -> num_rows == 1) {  
        $_SESSION["username"] = $usuario;
        header("location:../paginas/Stats.php");
    } else {
        header("location:../paginas/login.php?msg=loginmal");
    }


    ?>

    <p><?php echo "$usuario , $password" ?></p>