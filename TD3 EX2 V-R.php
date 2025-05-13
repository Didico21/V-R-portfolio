<?php
// Initialiser le numéro de départ (100, car on a 10 lignes * 10 cellules)
$startNumber = 100;

// Début du HTML pour afficher le tableau
echo "<html><head><style>";
echo "  table { border-collapse: collapse; }";
echo "  td { width: 50px; height: 50px; text-align: center; vertical-align: middle; border: 1px solid black; font-size: 16px; }";
echo "</style></head><body>";
echo "<table>";

// Boucle pour créer 10 lignes
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>"; // Début de la ligne
    
    // Boucle pour créer 10 cellules dans chaque ligne
    for ($col = 1; $col <= 10; $col++) {
        // Afficher le numéro, puis le décrémenter
        echo "<td>" . $startNumber-- . "</td>";
    }

    echo "</tr>"; // Fin de la ligne
}

echo "</table>"; // Fin du tableau
echo "</body></html>";
?>
