<?php

$user = $_POST["usuario"];
$password = $_POST["password"];


echo $user."<br>";
echo $password."<br>";

// Conecto con la bd y compruebo el login
echo " select * from usuarios where username='$user' and password='$password' <br>";

if ($user == "ice" && $password == "123") { 
    echo "login bien";
}else{
    // Redirección
    header("location:login.php?error=1");
}
