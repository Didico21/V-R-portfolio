<?php
// Définir les informations de connexion correctes (stockées en dur dans le fichier)
$login_correct = 'utilisateur';
$mot_de_passe_correct = 'motdepasse123';

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les données saisies par l'utilisateur
    $login_saisi = $_POST['login'];
    $mot_de_passe_saisi = $_POST['mot_de_passe'];

    // Comparer les informations saisies avec celles stockées en dur
    if ($login_saisi === $login_correct && $mot_de_passe_saisi === $mot_de_passe_correct) {
        // Si les informations sont correctes, afficher "Connexion OK"
        echo "Connexion OK";
    } else {
        // Si les informations sont incorrectes, afficher "Connexion KO"
        echo "Connexion KO";
    }
} else {
    // Si le formulaire n'a pas encore été soumis, afficher le formulaire de connexion
    ?>
    <form method="POST" action="">
        <label for="login">Login :</label>
        <input type="text" name="login" id="login" required>
        <br>
        
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        <br>
        
        <button type="submit" name="submit">Se connecter</button>
    </form>
    <?php
}
?>
