<?php
echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Affichage des nombres</title>
</head>
<body>";

$exclusions = [26, 37, 88, 1111];

for ($i = 0; $i <= 1337; $i++) {
    if (!in_array($i, $exclusions)) {
        echo "$i<br>";
    }
}

echo "</body>
</html>";
?>
