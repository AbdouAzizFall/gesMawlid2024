<?php
// Connexion à la base de données
require_once '../conn/connection.php';

// Requête pour obtenir les statistiques
$total_inscrits_sql = "SELECT COUNT(*) AS total FROM inscriptions";
$montant_10000_sql = "SELECT COUNT(*) AS total FROM inscriptions WHERE montant = 10000";
$montant_15000_sql = "SELECT COUNT(*) AS total FROM inscriptions WHERE montant = 15000";
$montant_20000_sql = "SELECT COUNT(*) AS total FROM inscriptions WHERE montant = 20000";

$total_inscrits_stmt = $db->query($total_inscrits_sql);
$total_inscrits = $total_inscrits_stmt->fetch(PDO::FETCH_ASSOC)['total'];

$montant_10000_stmt = $db->query($montant_10000_sql);
$montant_10000 = $montant_10000_stmt->fetch(PDO::FETCH_ASSOC)['total'];

$montant_15000_stmt = $db->query($montant_15000_sql);
$montant_15000 = $montant_15000_stmt->fetch(PDO::FETCH_ASSOC)['total'];

$montant_20000_stmt = $db->query($montant_20000_sql);
$montant_20000 = $montant_20000_stmt->fetch(PDO::FETCH_ASSOC)['total'];

// Requête pour obtenir les statistiques par sexe
$hommes_sql = "SELECT COUNT(*) AS total FROM inscriptions WHERE sexe = 'Homme'";
$filles_sql = "SELECT COUNT(*) AS total FROM inscriptions WHERE sexe = 'Femme'";

$hommes_stmt = $db->query($hommes_sql);
$nombre_hommes = $hommes_stmt->fetch(PDO::FETCH_ASSOC)['total'];

$filles_stmt = $db->query($filles_sql);
$nombre_femmes = $filles_stmt->fetch(PDO::FETCH_ASSOC)['total'];

// Requête pour obtenir le nombre total des autres participations
$autres_participations_sql = "SELECT COUNT(*) AS total FROM inscriptions WHERE montant NOT IN (10000, 15000, 20000)";
$autres_participations_stmt = $db->query($autres_participations_sql);
$nombre_autres_participations = $autres_participations_stmt->fetch(PDO::FETCH_ASSOC)['total'];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
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
    <h1 class="my-4">Statistiques des Cotisations</h1>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="summary-card">
                <div>
                    <h2>Total</h2>
                    <p><?php echo $total_inscrits; ?> inscrits</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="summary-card">
                <div>
                    <h2>10 000f</h2>
                    <p><?php echo $montant_10000; ?> personnes</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="summary-card">
                <div>
                    <h2>15 000f</h2>
                    <p><?php echo $montant_15000; ?> personnes</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="summary-card">
                <div>
                    <h2>20 000f</h2>
                    <p><?php echo $montant_20000; ?> personnes</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="my-4">Répartition par Sexe</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="summary-card">
                <div>
                    <h2>Hommes</h2>
                    <p><?php echo $nombre_hommes; ?> personnes</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="summary-card">
                <div>
                    <h2>Femmes</h2>
                    <p><?php echo $nombre_femmes; ?> personnes</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Autres Participations -->
    <h2 class="my-4">Autres Participations</h2>
    <div class="summary-card">
        <h2>Total Autres Participations</h2>
        <p><?php echo isset($nombre_autres_participations) ? $nombre_autres_participations : 'Non disponible'; ?> participations</p>
    </div>
</div>

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
