<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $id = $_POST['id'];
    $lib = $_POST['lib'];
    $montant = $_POST['montant'];
    $date = $_POST['date'];

    // Préparation et exécution de la requête de mise à jour
    $sql = "UPDATE depenses SET lib = :lib, montant = :montant, date = :date WHERE id = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':lib', $lib);
    $stmt->bindParam(':montant', $montant);
    $stmt->bindParam(':date', $date);

    if ($stmt->execute()) {
        header("Location: depense.php?success=2"); // Redirection avec succès
        exit();
    } else {
        echo "<p>Une erreur est survenue lors de la modification de la dépense.</p>";
    }
} else {
    echo "<p>Formulaire non soumis correctement.</p>";
}
?>
