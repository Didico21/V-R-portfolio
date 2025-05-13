<?php
// Obtenir l'heure et les minutes actuelles
$currentHour = date("H"); // L'heure actuelle en format 24h (de 00 à 23)
$currentMinute = date("i"); // Les minutes actuelles (de 00 à 59)

// Boucle pour afficher les heures et minutes de 00:00 jusqu'à l'heure actuelle
for ($hour = 0; $hour <= $currentHour; $hour++) {
    // Formater l'heure avec un zéro devant si nécessaire (ex : 01, 02, ..., 09)
    $formattedHour = str_pad($hour, 2, "0", STR_PAD_LEFT);
    
    // Si on est à la dernière heure (l'heure actuelle), afficher les minutes aussi
    if ($hour == $currentHour) {
        for ($minute = 0; $minute <= $currentMinute; $minute++) {
            // Formater les minutes avec un zéro devant si nécessaire (ex : 01, 02, ..., 59)
            $formattedMinute = str_pad($minute, 2, "0", STR_PAD_LEFT);
            // Afficher l'heure et les minutes
            echo "$formattedHour:$formattedMinute<br>";
        }
    } else {
        // Si on n'est pas à l'heure actuelle, afficher toutes les minutes de 00 à 59
        for ($minute = 0; $minute < 60; $minute++) {
            // Formater les minutes avec un zéro devant si nécessaire
            $formattedMinute = str_pad($minute, 2, "0", STR_PAD_LEFT);
            // Afficher l'heure et les minutes
            echo "$formattedHour:$formattedMinute<br>";
        }
    }
}
?>
