<?php
require_once 'conn/connection.php'; // Inclure la connexion à la base de données

// Vérifiez si les données du formulaire ont été envoyées
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Préparer et exécuter la requête pour trouver l'utilisateur
    $query = $db->prepare('SELECT * FROM connexion WHERE username = :username');
    $query->bindParam(':username', $username);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($user && $password === $user['password']) {
        header('Location: accueil/index.php');
        exit;
    } else {
        header('Location: connexion.php?error=Vos informations sont incorrectes.');
        exit;
    }
    
} else {
    // Redirection si le formulaire n'est pas soumis via POST
    header('Location: connexion.php'); // Redirection vers la page de connexion
    exit;
}
