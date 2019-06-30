<?php

/**
 * ======================
 * 
 *      Mini blog
 * 
 * ======================
 */

/**
 * Le but de cette paga va être de se connecter à la BDD
 * et d'y récupérer les articles dispos
 */


// Connexion BDD
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon blog</title>
</head>
<body>
    <h1>Bienvenue sur mon blog !</h1>

    <h3>Les derniers billets du blog</h3>

    <?php
        // Retrouver les données en BDD

        $sql = $bdd->prepare("SELECT titre, date_billet, contenu FROM billet");
        $sql->execute();

        $result = $sql->fetchAll();

        var_dump($result);
        exit;
    ?>
</body>
</html>