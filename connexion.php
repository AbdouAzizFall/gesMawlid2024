<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .vh-100 { height: 100vh; }
        .card { border-radius: 1rem; }
        .img-fluid { border-radius: 1rem 0 0 1rem; }
        .btn-dark { background-color: #343a40; border: none; }
        .btn-dark:hover { background-color: #23272b; }
        .form-label { font-size: 1rem; }
        .form-control-lg { height: calc(1.5em + .75rem + 2px); }
        .img-resized { height: 60vh; object-fit: cover; }
        .col-md-6.full-height { height: 105vh; }
        .card-container { max-width: 500px; }
        .background-extended {
            min-height: 120vh; /* Augmentez cette valeur pour dépasser plus */
            background-color: #9A616D; 
            position: relative;
            overflow: hidden;
        }
        .background-extended::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #9A616D; /* Même couleur d'arrière-plan */
            z-index: -1;
        }
    </style>
</head>
<body>

<section class="background-extended">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6 full-height d-none d-md-flex">
                <img src="img/img.jpeg" alt="login form" class="img-fluid img-resized" />
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="card card-container p-4 p-lg-5 text-black">
                    <!-- Affichage des messages d'erreur -->
                    <?php if (isset($_GET['error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($_GET['error']); ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="login.php">
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0"> MAWLID 2024 </span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter en tant qu'administrateur</h5>

                        <div class="form-outline mb-4">
                            <input type="text" name="username" id="form2Example17" class="form-control form-control-lg" required />
                            <label class="form-label" for="form2Example17">Username</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" required />
                            <label class="form-label" for="form2Example27">Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Connexion</button>
                        </div>
                        <a href="#" class="small text-muted">Conditions d'utilisation</a>
                        <a href="#" class="small text-muted">Politique de confidentialité</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
