<?php
echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Affichage des nombres</title>
    <style>
        .italic {
            font-style: italic;
        }
        .underline {
            text-decoration: underline;
        }
    </style>
</head>
<body>";

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<span class='italic'>$i</span><br>";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<span class='underline'>$i</span><br>";
    } else {
        echo "$i<br>";
    }
}

echo "</body>
</html>";
?>
