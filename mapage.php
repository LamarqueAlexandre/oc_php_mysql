<?php
/**
 * ========================
 *      Les sessions
 * ========================
 */

// On démarre la session avant d'écrire du code HTML
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma page</title>
</head>
<body>
    <p>
        Re bonjour <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es sur ma page?
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage.php</a>
        <a href="monscript.php">Lien vers monscript.php</a>
        <a href="informations.php">Lien vers informations.php</a>
    </p>
</body>
</html>