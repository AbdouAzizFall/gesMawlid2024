<?php
require_once '../conn/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM autres_participations WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: autres_participations.php");
        exit;
    } else {
        echo "Erreur lors de la suppression de la participation.";
    }
} else {
    echo "ID non fourni.";
}
?>
