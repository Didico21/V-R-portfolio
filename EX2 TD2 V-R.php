 <?php
// Initialiser le nombre total d'éléments dans le tableau (10x10)
$rows = 10;
$cols = 10;
$total_elements = $rows * $cols;

// Initialiser un tableau vide pour contenir les numéros
$table = [];

// Remplir le tableau avec les numéros dans l'ordre inverse
$counter = $total_elements; // Commencer par le plus grand numéro

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        // Assigner le numéro dans chaque cellule
        $table[$i][$j] = $counter;
        $counter--; // Décrémenter le numéro
    }
}

// Afficher le tableau HTML
echo "<table border='1'>"; // Créer une table HTML avec une bordure
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>"; // Commencer une nouvelle ligne
    for ($j = 0; $j < $cols; $j++) {
        // Afficher chaque cellule avec son numéro
        echo "<td style='text-align: center;'>" . $table[$i][$j] . "</td>";
    }
    echo "</tr>"; // Fin de la ligne
}
echo "</table>"; // Fin de la table
?>