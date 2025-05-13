<?php
// Récupérer l'heure actuelle du serveur 
$heure = date("H"); // "H" donne l'heure en format 24 heures (0 à 23)

// Vérifier l'heure et appliquer le fond en conséquence
if ($heure >= 0 && $heure < 12) {
    // Si l'heure est entre 00h et 12h (exclu)
	echo'<style>body { background-color: white;)</style>';
} else {
	// Si l'heure est entre 13h et 23H
	echo'<style>body{ background-color:#333; color: white;}</style>';
}
?>