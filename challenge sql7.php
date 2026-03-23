<?php

 $host = "localhost";
 $dbname = "challege";
 $user = "root";
 $password = "";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    echo "Connexion réussie à la base de données";

} catch (PDOException $e) {

    die("Erreur de connexion à la base de données");

}