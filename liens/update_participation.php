<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php';

// Vérifier si l'ID et les autres données du formulaire sont bien envoyés
if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['montant'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $montant = $_POST['montant'];

    // Préparer la requête de mise à jour
    $sql = "UPDATE autres_participations SET nom = :nom, prenom = :prenom, montant = :montant WHERE id = :id";
    $stmt = $db->prepare($sql);

    // Lier les paramètres
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindParam(':montant', $montant, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Redirection vers la page des autres participations après succès
        header("Location: autres_participations.php");
        exit();
    } else {
        // En cas d'échec, afficher un message d'erreur
        echo "Erreur lors de la mise à jour.";
    }
} else {
    // Si les données ne sont pas envoyées correctement, rediriger avec un message d'erreur
    echo "Données manquantes. Veuillez remplir tous les champs.";
}
?>
