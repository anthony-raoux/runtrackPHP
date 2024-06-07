<?php
if (isset($_COOKIE['nbVisites'])) {
    $nbVisites = $_COOKIE['nbVisites']; 
} else {
    $nbVisites = 0; 
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nbVisites++;
    setcookie('nbVisites', $nbVisites, time() + 3600 * 24 * 30); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
    $nbVisites = 0;
    setcookie('nbVisites', $nbVisites, time() + 3600 * 24 * 30); 
}

echo "Nombre de visites : " . $nbVisites;
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
