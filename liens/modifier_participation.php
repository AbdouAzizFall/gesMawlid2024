<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php';

// Vérifier si l'ID est fourni dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer la requête pour récupérer la participation spécifique
    $sql = "SELECT * FROM autres_participations WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Récupérer les données de la participation
    $participation = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si la participation existe
    if (!$participation) {
        // Redirection ou message d'erreur si l'ID n'existe pas
        echo "Participation non trouvée.";
        exit;
    }
} else {
    // Redirection ou message d'erreur si l'ID n'est pas fourni
    echo "ID non fourni.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Participation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Modifier Participation</h1>
        <form action="update_participation.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($participation['id']); ?>">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($participation['nom']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo htmlspecialchars($participation['prenom']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="montant" class="form-label">Montant</label>
                <input type="number" class="form-control" id="montant" name="montant" value="<?php echo htmlspecialchars($participation['montant']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
