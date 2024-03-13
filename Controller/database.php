<?php
$host = "localhost"; 
$user = "votre_nom_utilisateur";
$database = "Restot";

$conn = new mysqli($host, $user, $database);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

function execute_query($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
}
?>
