<?php
/**
 * ========================
 *      Les sessions
 * ========================
 */

// On démarre la session avant d'écrire du code HTML
session_start();

// On peut créer des variables de session dans $_SESSION
$_SESSION['prenom'] = 'Alex';
$_SESSION['nom'] = 'Lamarque';
$_SESSION['age'] = '27';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titre de ma page</title>
</head>
<body>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage.php</a>
        <a href="monscript.php">Lien vers monscript.php</a>
        <a href="informations.php">Lien vers informations.php</a>
    </p>
</body>
</html>