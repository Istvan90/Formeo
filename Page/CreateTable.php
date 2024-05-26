<?php 
    $conn = new mysqli("localhost", "Steve", "stevemagics", "DBbasededonnee");

    $Query = "CREATE TABLE User (
        id int(6) AUTO_INCREMENT PRIMARY KEY,
        Nom VARCHAR(30) NOTNULL, 
        Emai VARCHAR(50)
    )";

    if ($conn -> $Query == true) {
        echo "dude";
    }
    else {
        echo "lol";
    }
?>