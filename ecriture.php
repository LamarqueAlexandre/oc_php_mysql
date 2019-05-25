<?php 

/**
 * ======================
 * Lecture/écriture 
 * dans un fichier
 * ======================
 */

// 1 : On ouvre le fichier
$monFichier = fopen('compteur.txt', 'r+');

// 2 : On lit la première ligne du fichier (nombre de pages vues)
$pages_vues = fgets($monFichier);

$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monFichier, 0); // On remet le curseur au début du fichier
fputs($monFichier, $pages_vues); // On écrit le nouveau nombre de pages vues

// 3 : On ferme le fichier
fclose($monFichier);

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>