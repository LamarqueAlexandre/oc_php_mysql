<?php 

// Connexion à la database via PDO

try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}
?>

<!-- Formulaire qui récupère les messages -->
<!-- minichat_post.php gère le traitement -->
<form action="/minichat_post.php" method="post">
    <label>Pseudo :</label>
    <input type="text" name="pseudo"><br>
    <label>Message :</label>
    <input type="text" name="message"><br>
    <input type="submit" value="Envoyer">
</form>

<?php

// Récupérer les 10 derniers messages en BDD
$stmt = $bdd->prepare("SELECT * FROM chat ORDER BY id DESC LIMIT 10");
$stmt->execute();

$result = $stmt->fetchAll();

// Afficher les 10 derniers messages 

foreach ($result as $item) {
    print($item['pseudo'] . ' : ' . $item['message']);
}




?>