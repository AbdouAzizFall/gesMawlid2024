<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
        .card-custom {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .card-custom:hover {
            transform: scale(1.05);
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
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Inscription</h5>
                        <p class="card-text">Inscrivez-vous ici.</p>
                        <a href="../liens/inscription.php" class="btn btn-custom">S'inscrire</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Effectif</h5>
                        <p class="card-text">Consultez l'effectif ici.</p>
                        <a href="../liens/effectif.php" class="btn btn-custom">Voir l'effectif</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Dépenses</h5>
                        <p class="card-text">Consultez les dépenses ici.</p>
                        <a href="../liens/depense.php" class="btn btn-custom">Voir les dépenses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Solde</h5>
                        <p class="card-text">Vérifiez le solde ici.</p>
                        <a href="../liens/solde.php" class="btn btn-custom">Voir le solde</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Autres Participations</h5>
                        <p class="card-text">Consultez les autres participations anonymes ici.</p>
                        <a href="../liens/autres_participations.php" class="btn btn-custom">Voir les autres participations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
