<?php

// Définition de la constante SITEURL
define("SITEURL", "http://localhost:8887");

$host = "localhost"; 
$username = "root";
$password = "root";
$database = "Restot";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

if (!$conn->set_charset("utf8mb4")) {
    printf("Erreur lors du chargement du jeu de caractères utf8mb4 : %s\n", $conn->error);
    exit();
}
