<?php
// Vérifier si le paramètre 'nom' existe dans l'URL
if (isset($_GET['nom'])) {
    // Récupérer la valeur du paramètre 'nom'
    $nom = $_GET['nom'];
    
    // Afficher un message de bienvenue avec le nom fourni
    echo "Bonjour, " . htmlspecialchars($nom) . "!";
} else {
    // Si le paramètre 'nom' n'est pas défini, afficher un message d'erreur
    echo "Le paramètre 'nom' est manquant.";
}
?>
