<?php
require_once '../conn/connection.php';

// Récupération des totaux
$sql = "SELECT SUM(montant) AS total FROM autres_participations";
$stmt = $db->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_autres_participations = $result['total'] ?? 0;

$sql = "SELECT SUM(montant) AS total FROM depenses";
$stmt = $db->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_depenses = $result['total'] ?? 0;

$sql = "SELECT SUM(montant) AS total FROM inscriptions";
$stmt = $db->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_versements = $result['total'] ?? 0;

$solde_actuel = $total_versements - $total_depenses + $total_autres_participations;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solde</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-custom {
            background-color: #343a40;
            border-bottom: 2px solid #ff6219;
        }
        .navbar-custom .navbar-brand, .navbar-custom .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #ff6219;
        }
        .navbar-custom .navbar-brand:hover {
            color: #ff6219;
        }
        .container {
            margin-top: 20px;
        }
        .card-custom {
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
        }
        .card-custom h5 {
            color: #343a40;
            margin-bottom: 15px;
        }
        .card-custom p {
            font-size: 1.5rem;
            color: #ff6219;
            margin-bottom: 0;
        }
        .summary-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-radius: 0.5rem;
            background-color: #343a40;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .summary-card h2 {
            margin: 0;
            font-size: 2rem;
        }
        .balance-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .balance-section .card-custom {
            width: 48%;
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
                    <a class="nav-link" href="autres_participations.php">Autres Participations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="depense.php">Dépenses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-custom" href="../logout.php">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1 class="my-4">Solde</h1>
        <div class="balance-section">
            <div class="card card-custom">
                <h5>Montant total versé</h5>
                <p><?php echo number_format(floor($total_versements), 0, ',', ' '); ?> f</p>
            </div>
            <div class="card card-custom">
                <h5>Autres participations</h5>
                <p><?php echo number_format(floor($total_autres_participations), 0, ',', ' '); ?> f</p>
            </div>
        </div>
        <div class="balance-section">
            <div class="card card-custom">
                <h5>Montant total</h5>
                <p><?php echo number_format(floor($total_versements + $total_autres_participations), 0, ',', ' '); ?> f</p>
            </div>
            <div class="card card-custom">
                <h5>Dépense totale</h5>
                <p><?php echo number_format(floor($total_depenses), 0, ',', ' '); ?> f</p>
            </div>
        </div>
        <div class="summary-card mt-4">
            <h2>Solde Actuel:</h2>
            <h2><?php echo number_format(floor($solde_actuel), 0, ',', ' '); ?> f</h2>
        </div>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
