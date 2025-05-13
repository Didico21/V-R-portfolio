<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les quatre noms saisis par l'utilisateur
    $nom1 = $_POST['nom1'];
    $nom2 = $_POST['nom2'];
    $nom3 = $_POST['nom3'];
    $nom4 = $_POST['nom4'];

    // Placer les noms dans un tableau
    $noms = array($nom1, $nom2, $nom3, $nom4);

    // Trier le tableau en fonction de la longueur des noms (ordre croissant)
    usort($noms, function($a, $b) {
        return strlen($a) - strlen($b);
    });

    // Afficher les noms triés par nombre de caractères
    echo "Les noms triés par nombre de caractères (ordre croissant) sont :<br>";
    foreach ($noms as $nom) {
        echo $nom . "<br>";
    }
} else {
    // Si le formulaire n'a pas encore été soumis, afficher les champs de saisie
    ?>
    <form method="POST" action="">
        <label for="nom1">Nom 1 :</label>
        <input type="text" name="nom1" id="nom1" required><br>

        <label for="nom2">Nom 2 :</label>
        <input type="text" name="nom2" id="nom2" required><br>

        <label for="nom3">Nom 3 :</label>
        <input type="text" name="nom3" id="nom3" required><br>

        <label for="nom4">Nom 4 :</label>
        <input type="text" name="nom4" id="nom4" required><br>

        <button type="submit" name="submit">Soumettre</button>
    </form>
    <?php
}
?>
