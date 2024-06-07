<?php
session_start(); 

if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0; 
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0; 
}

$_SESSION['nbVisites']++;

echo "Nombre de visites : " . $_SESSION['nbVisites'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de Visites</title>
</head>
<body>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>
