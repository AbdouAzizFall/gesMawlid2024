<?php
// Inclure le fichier de connexion
require_once '../conn/connection.php'; // Assurez-vous que le chemin est correct

// Initialisation des variables
$totalVerses = 0;
$totalDepenses = 0;

// Calculer le montant total versé
$stmt = $db->query("SELECT SUM(montant) AS total FROM inscriptions");
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $totalVerses = floor($result['total']);
}

// Calculer le montant total des dépenses
$stmt = $db->query("SELECT SUM(montant) AS total FROM depenses");
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $totalDepenses = floor($result['total']);
}

// Calculer le solde actuel
$soldeActuel = $totalVerses - $totalDepenses;

// Retourner les résultats en JSON
header('Content-Type: application/json');
echo json_encode([
    'totalVerses' => $totalVerses,
    'totalDepenses' => $totalDepenses,
    'soldeActuel' => $soldeActuel
]);
?>
