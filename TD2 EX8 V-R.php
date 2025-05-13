<?php
// Obtenir l'heure actuelle
$currentHour = date("H"); // Récupère l'heure au format 24h (de 00 à 23)

// Boucle pour afficher toutes les heures de 00 à l'heure actuelle
for ($hour = 0; $hour <= $currentHour; $hour++) {
    // Formater l'heure avec un zéro devant pour les heures < 10 (ex : 01, 02, ..., 09)
    $formattedHour = str_pad($hour, 2, "0", STR_PAD_LEFT);
    
    // Afficher l'heure sous la forme HH:00
    echo "$formattedHour:00<br>";
}
?>
