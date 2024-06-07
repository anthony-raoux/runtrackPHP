<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}

if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    echo "<h2>Liste des Prénoms :</h2>";
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>$prenom</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucun prénom saisi.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter des Prénoms</title>
</head>
<body>

<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <input type="submit" value="Ajouter">
</form>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>
