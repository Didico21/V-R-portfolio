<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer le pays sélectionné par l'utilisateur
    $pays_selectionne = $_POST['pays'];
    
    // Afficher le pays sélectionné
    echo "Vous avez sélectionné : " . htmlspecialchars($pays_selectionne);
} else {
    // Si le formulaire n'a pas encore été soumis, afficher la liste des pays
    ?>
    <form method="POST" action="">
        <label for="pays">Choisissez un pays :</label>
        <select name="pays" id="pays">
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Martinique">Martinique</option>
            <option value="Guyane">Guyane</option>
        </select>
        <button type="submit" name="submit">Soumettre</button>
    </form>
    <?php
}
?>
