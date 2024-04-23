<?php

function connectDB(){
    $mysql = new mysqli("localhost", "root", "", "inazuma", 3307); // XAMPP
    return $mysql; 
}

