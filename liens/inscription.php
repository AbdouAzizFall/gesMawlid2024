<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ff6219;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e64a19;
        }
        .step-form {
            display: none;
        }
        .step-form.active {
            display: block;
        }
        .alert-success {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 9999;
            display: none;
        }
        .alert-success.show {
            display: block;
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
                    <a class="nav-link" href="effectif.php">Effectif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="depense.php">Dépenses</a>
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Inscription</h1>
            <!-- Affichage du message de succès -->
            <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                <div id="successMessage" class="alert alert-success show" role="alert">
                    Inscription réussie !
                </div>
            <?php endif; ?>
        </div>

        <!-- Formulaire d'inscription -->
        <form id="inscriptionForm" action="traitement_inscription.php" method="post">
            <div id="step1" class="step-form active card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Étape 1: Informations Personnelles</h5>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <button type="button" class="btn btn-custom" onclick="nextStep()">Suivant</button>
                </div>
            </div>
            
            <div id="step2" class="step-form card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Étape 2: Détails de l'Inscription</h5>
                    <div class="mb-3">
                        <label for="sexe" class="form-label">Sexe</label>
                        <select class="form-select" id="sexe" name="sexe" required>
                            <option value="" disabled selected>Choisissez...</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Numéro de téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    <button type="button" class="btn btn-custom" onclick="prevStep()">Précédent</button>
                    <button type="button" class="btn btn-custom" onclick="nextStep()">Suivant</button>
                </div>
            </div>

            <div id="step3" class="step-form card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Étape 3: Confirmation</h5>
                    <div class="mb-3">
                        <label for="montant" class="form-label">Montant versé</label>
                        <input type="number" class="form-control" id="montant" name="montant" step="0.01" required>
                    </div>
                    <button type="button" class="btn btn-custom" onclick="prevStep()">Précédent</button>
                    <button type="submit" class="btn btn-custom">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentStep = 1;

        function showStep(step) {
            document.querySelectorAll('.step-form').forEach((element) => {
                element.classList.remove('active');
            });
            document.getElementById(`step${step}`).classList.add('active');
        }

        function nextStep() {
            if (currentStep === 1) {
                const step1Form = document.getElementById('step1');
                const nom = step1Form.querySelector('#nom').value.trim();
                const prenom = step1Form.querySelector('#prenom').value.trim();

                if (nom && prenom) {
                    currentStep++;
                    showStep(currentStep);
                } else {
                    alert('Veuillez remplir tous les champs.');
                }
            } else if (currentStep === 2) {
                const step2Form = document.getElementById('step2');
                const sexe = step2Form.querySelector('#sexe').value;
                const telephone = step2Form.querySelector('#telephone').value.trim();

                if (sexe && telephone) {
                    currentStep++;
                    showStep(currentStep);
                } else {
                    alert('Veuillez remplir tous les champs.');
                }
            }
        }

        function prevStep() {
            currentStep--;
            if (currentStep < 1) currentStep = 1;
            showStep(currentStep);
        }
        
        // Hide success message after 3 seconds
        window.onload = function() {
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 3000);
            }
        };
    </script>
</body>
</html>
