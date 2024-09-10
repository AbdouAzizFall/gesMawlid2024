<?php
// Inclure la connexion à la base de données
require_once '../conn/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $montant = (float) $_POST['montant'];
    $date_participation = $_POST['date_participation'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO autres_participations (nom, prenom, montant, date_participation) 
            VALUES (:nom, :prenom, :montant, :date_participation)";
    $stmt = $db->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':montant', $montant);
    $stmt->bindParam(':date_participation', $date_participation);

    // Exécution de la requête
    if ($stmt->execute()) {
        // Redirection vers la page des autres participations après succès
        header('Location: autres_participations.php');
        exit();
    } else {
        echo "Erreur lors de l'ajout de la participation.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>
