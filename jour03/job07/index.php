<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de Transformation</title>
</head>
<body>

<form action="formulaire.php" method="post">
    <label for="str">Chaîne de caractères :</label>
    <input type="text" id="str" name="str" required>
    
    <label for="fonction">Choisir une transformation :</label>
    <select id="fonction" name="fonction" required>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    
    <button type="submit" name="submit">Valider</button>
</form>

</body>
</html>
