<?php

// Fichier de traitement des données du formulaire
// Connexion à la base de données
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}

// Récupération des données du formulaire

$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

// Contrôler que les champs ne sont pas vides

// Insérer les données en BDD via requêtes préparées
$stmt = $bdd->prepare("INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)");
$stmt->bindParam(':pseudo', $pseudo);
$stmt->bindParam(':message', $message);
$stmt->execute();

// Effectuer une redirection sur la page minichat.php
header('Location: /minichat.php');
?>