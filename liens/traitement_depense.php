<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $lib = $_POST['lib'];
    $montant = $_POST['montant'];
    $date = $_POST['date'];

    // Préparation et exécution de la requête d'insertion
    $sql = "INSERT INTO depenses (lib, montant, date) VALUES (:lib, :montant, :date)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':lib', $lib);
    $stmt->bindParam(':montant', $montant);
    $stmt->bindParam(':date', $date);

    if ($stmt->execute()) {
        header("Location: depense.php?success=1"); // Redirection avec succès
        exit();
    } else {
        echo "<p>Une erreur est survenue lors de l'ajout de la dépense.</p>";
    }
} else {
    echo "<p>Formulaire non soumis correctement.</p>";
}
?>
