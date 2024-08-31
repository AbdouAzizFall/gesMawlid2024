<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Dépense</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="container">
        <h1 class="my-4">Modifier une Dépense</h1>
        <?php
        // Inclure le fichier de connexion
        require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

        $id = $_GET['id'];

        // Récupération de la dépense à modifier
        $sql = "SELECT * FROM depenses WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $depense = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($depense): ?>
            <form action="traitement_modif_depense.php" method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($depense['id']); ?>">
                <div class="mb-3">
                    <label for="lib" class="form-label">Libellé</label>
                    <input type="text" class="form-control" id="lib" name="lib" value="<?php echo htmlspecialchars($depense['lib']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="montant" class="form-label">Montant</label>
                    <input type="number" class="form-control" id="montant" name="montant" step="0.01" min="0" value="<?php echo number_format((float)$depense['montant'], 0, '.', ''); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo htmlspecialchars($depense['date']); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        <?php else: ?>
            <p>Dépense non trouvée.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
