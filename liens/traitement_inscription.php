<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

// Vérification que les données du formulaire sont présentes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $telephone = $_POST['telephone'];
    $montant = $_POST['montant'];

    // Préparation et exécution de la requête d'insertion
    $sql = "INSERT INTO inscriptions (nom, prenom, sexe, telephone, montant) VALUES (:nom, :prenom, :sexe, :telephone, :montant)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':sexe', $sexe);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':montant', $montant);

    if ($stmt->execute()) {
        // Redirection vers la page d'inscription avec le paramètre de succès
        header("Location: inscription.php?success=1");
        exit();
    } else {
        echo "<p>Une erreur est survenue lors de l'inscription.</p>";
    }
} else {
    echo "<p>Formulaire non soumis correctement.</p>";
}
?>
