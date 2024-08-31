<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparation et exécution de la requête de suppression
    $sql = "DELETE FROM inscriptions WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('Location: effectif.php?msg=deleted');
        exit();
    } else {
        echo "<p>Une erreur est survenue lors de la suppression.</p>";
    }
} else {
    die("ID du participant non spécifié.");
}
?>
