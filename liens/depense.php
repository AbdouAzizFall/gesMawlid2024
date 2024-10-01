<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépenses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-custom {
            background-color: #343a40;
            border-bottom: 2px solid #ff6219;
        }
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #ff6219;
        }
        .navbar-custom .navbar-brand {
            color: #ffffff;
        }
        .navbar-custom .navbar-brand:hover {
            color: #ff6219;
        }
        .container {
            margin-top: 20px;
        }
        .table-custom {
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .table-custom thead th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table-custom tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-custom tbody tr:hover {
            background-color: #eaeaea;
        }
        .btn-custom {
            background-color: #ff6219;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand ms-3" href="#">MAWLID 2024</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../accueil/index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="effectif.php">Effectif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="solde.php">Solde</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-custom" href="../logout.php">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1 class="my-4">Dépenses</h1>
        <p>Consultez et gérez les dépenses ici.</p>
        <a href="ajouter_depense.php" class="btn btn-custom mb-3">
            <i class="fas fa-plus"></i> Ajouter une Dépense
        </a>

        <!-- Tableau des dépenses -->
        <?php
        // Inclure le fichier de connexion
        require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

        // Requête pour obtenir toutes les dépenses
        $sql = "SELECT * FROM depenses";
        $stmt = $db->query($sql);
        $depenses = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($depenses): ?>
            <table class="table table-custom table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($depenses as $depense): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($depense['lib']); ?></td>
                            <td><?php echo number_format((float)$depense['montant'], 0, '.', ''); ?> f</td>
                            <td><?php echo htmlspecialchars($depense['date']); ?></td>
                            <td>
                                <a href="modifier_depense.php?id=<?php echo $depense['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                                <a href="supprimer_depense.php?id=<?php echo $depense['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette dépense ?');">
                                    <i class="fas fa-trash"></i> Supprimer
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Aucune dépense trouvée.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
