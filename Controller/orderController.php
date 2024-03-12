<?php
include 'database.php';

// Fonction pour ajouter une nouvelle commande
function add_order($id_restaurant, $id_user, $food_name, $comment, $price_of_order) {
    global $conn;
    $order_time = date("H:i:s"); // Heure actuelle
    $order_date = date("Y-m-d"); // Date actuelle

    $sql = "INSERT INTO order (id_restaurant, id_user, order_time, comment, price_of_order, order_date, food_name) 
            VALUES ('$id_restaurant', '$id_user', '$order_time', '$comment', '$price_of_order', '$order_date', '$food_name')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Fonction pour récupérer les détails d'une commande par son ID
function get_order_details($order_id) {
    global $conn;
    $sql = "SELECT * FROM order WHERE id = $order_id";
    $result = execute_query($sql);
    return $result->fetch_assoc();
}

//pour supprimer une commande
$sql = "DELETE FROM order WHERE order_id=1";
if ($conn->query($sql) === TRUE) {
    echo "Commande supprimée avec succès";
} else {
    echo "Erreur lors de la suppression de la commande : " . $conn->error;
}


?>
