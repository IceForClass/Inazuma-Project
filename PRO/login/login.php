<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: white;
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
    // error_reporting(0); // Buena en produccion mala en desarrollo
    if(isset($_GET["error"]) && $_GET["error"]==1){
        ?>
    <p class="error">ERROR, login mal</p>
    <?php
    }
    ?>
    

<form action="checklogin.php" method="POST">
    <p><label>Usuario: <input type="text" name="usuario"></label></p>
    <p><label>Password: <input type="password" name="password"></label></p>

    <input type="submit" value="login">
</form>

</body>
</html>