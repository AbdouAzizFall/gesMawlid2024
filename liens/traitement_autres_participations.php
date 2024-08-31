<?php
require_once '../conn/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $montant = $_POST['montant'];

    $sql = "INSERT INTO autres_participations (nom, prenom, montant) VALUES (:nom, :prenom, :montant)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':montant', $montant);

    if ($stmt->execute()) {
        header("Location: autres_participations.php");
        exit;
    } else {
        echo "Erreur lors de l'ajout de la participation.";
    }
} else {
    echo "Formulaire non soumis correctement.";
}
?>
