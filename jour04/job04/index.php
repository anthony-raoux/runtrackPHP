<?php
session_start(); 

if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom']; 
} else {
    $prenom = ''; 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); 
    $prenom = '';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connexion'])) {
    $prenom = $_POST['prenom']; 
    setcookie('prenom', $prenom, time() + 3600 * 24 * 30); 
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>

<?php
if (!empty($prenom)) {
    echo "<p>Bonjour $prenom !</p>";
?>
    <form method="post">
        <input type="submit" name="deco" value="Déconnexion">
    </form>
<?php
} else {
?>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <input type="submit" name="connexion" value="Connexion">
    </form>
<?php
}
?>

</body>
</html>
