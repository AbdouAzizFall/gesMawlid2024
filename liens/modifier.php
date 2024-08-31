<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Requête pour obtenir les données du participant
    $sql = "SELECT * FROM inscriptions WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $participant = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$participant) {
        die("Participant non trouvé.");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $telephone = $_POST['telephone'];
        $montant = $_POST['montant'];

        // Préparation et exécution de la requête de mise à jour
        $sql = "UPDATE inscriptions SET nom = :nom, prenom = :prenom, sexe = :sexe, telephone = :telephone, montant = :montant WHERE id = :id";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':montant', $montant);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            header('Location: effectif.php?msg=success');
            exit();
        } else {
            echo "<p>Une erreur est survenue lors de la mise à jour.</p>";
        }
    }
} else {
    die("ID du participant non spécifié.");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Participant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Modifier Participant</h1>
        <form method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($participant['nom']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo htmlspecialchars($participant['prenom']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <select class="form-select" id="sexe" name="sexe" required>
                    <option value="Homme" <?php if ($participant['sexe'] == 'Homme') echo 'selected'; ?>>Homme</option>
                    <option value="Femme" <?php if ($participant['sexe'] == 'Femme') echo 'selected'; ?>>Femme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo htmlspecialchars($participant['telephone']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="montant" class="form-label">Montant versé</label>
                <input type="text" class="form-control" id="montant" name="montant" value="<?php echo htmlspecialchars($participant['montant']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Sauvegarder</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
