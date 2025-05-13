<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de mot de passe</title>
</head>
<body>
    <h2>Veuillez entrer votre mot de passe et sa confirmation :</h2>
    
    <form method="POST" action="controleur.php">
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required><br>

        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br>

        <button type="submit" name="submit">Soumettre</button>
    </form>
</body>
</html>
