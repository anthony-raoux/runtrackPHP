<?php
$intVar = 42;              // Variable entière
$floatVar = 3.14;          // Variable flottante
$stringVar = "Bonjour";    // Variable chaîne de caractères
$boolVar = true;           // Variable booléenne

echo "<!DOCTYPE html>
<html lang='fr'>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Entier</td>
                <td>\$intVar</td>
                <td>$intVar</td>
            </tr>
            <tr>
                <td>Flottant</td>
                <td>\$floatVar</td>
                <td>$floatVar</td>
            </tr>
            <tr>
                <td>Chaîne</td>
                <td>\$stringVar</td>
                <td>$stringVar</td>
            </tr>
            <tr>
                <td>Booléen</td>
                <td>\$boolVar</td>
                <td>" . ($boolVar ? 'true' : 'false') . "</td>
            </tr>
        </tbody>
    </table>
</body>
</html>";
?>
