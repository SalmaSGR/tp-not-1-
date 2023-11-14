<?php
// Inclure le fichier de la couche métier
require_once('ClientManager.php');

// Vérifier si l'ID du client est passé en paramètre
if (isset($_GET['id'])) {
    $ID_C = $_GET['id'];

    // Créer une instance de ClientManager en passant la connexion à la base de données
    $clientManager = new ClientManager(connectionBdd());

    // Récupérer les détails du client
    $clientDetails = $clientManager->getClientById($ID_C);

    // Afficher les détails du client
    echo "<h2>Détails du client :</h2>";
    echo "<p>ID : {$clientDetails['ID_C']}</p>";
    echo "<p>Nom : {$clientDetails['Nom']}</p>";
    echo "<p>Prénom : {$clientDetails['Prenom']}</p>";
    echo "<p>Mail : {$clientDetails['Mail']}</p>";
    echo "<p>Téléphone : {$clientDetails['Telephone']}</p>";
    echo "<p>Adresse : {$clientDetails['Adresse']}</p>";
    echo "<p>Situation_Familiale : {$clientDetails['Situation_Familiale ']}</p>";
    echo "<p>Year_Birthday : {$clientDetails['Year_Birthday']}</p>";
} else {
    // Rediriger vers la liste des clients si l'ID n'est pas spécifié
    header('Location: index.php');
    exit();
}
?>
