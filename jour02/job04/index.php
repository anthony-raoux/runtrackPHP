<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de saisie</title>
</head>
<body>
    <h2>Formulaire de saisie</h2>
    <form action="formulaire.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br><br>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
