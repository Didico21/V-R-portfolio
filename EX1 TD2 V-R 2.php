<?php
// Début DU code PHP
echo "<!DOCTYPE html>";
echo "<html lang="fr">";
echo "<head>;
echo "<meta charset="UTF-8">";
echo "<meta name="viewport" content="width=device-width, initial-scale=1.0">";
echo "<title>Alternance de Div</title>"";
echo "<style>";
echo "div {";
echo "  width: 50px;";
echo "  height: 50px;";
echo "  display: inline-block;";
echo "  text-align: center;";
echo "  line-height: 50px;";
echo "  font-size: 14px;";
echo "  color: white;";
echo "  margin: 5px;";
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";

 // Boucle pour afficher les 10 div
 for ($i = 1; $i<= 10; $i++) {
	 // Alternance de couleur
	 $bgColor = ($i % 2 == 0) ? 'green' : 'red';
	 
	 // Affichage de la div avec son numéro au centre
	 echo "<div style='background-color: $bgColor;'>$i</div>";
}

echo "</body>";
echo "</html";
?>