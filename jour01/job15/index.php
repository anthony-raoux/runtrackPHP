<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de chaîne</title>
</head>
<body>

<h2>Transformation de chaîne</h2>

<form method="post">
    <label for="str">Chaîne de caractères:</label><br>
    <input type="text" id="str" name="str"><br><br>
    
    <label for="transformation">Choisir une transformation:</label><br>
    <select id="transformation" name="transformation">
        <option value="gras">Gras (mots commençant par une majuscule)</option>
        <option value="cesar">César (décalage des caractères)</option>
        <option value="plateforme">Plateforme (mots finissant par "me")</option>
    </select><br><br>
    
    <input type="submit" value="Valider">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $transformation = $_POST["transformation"];
    
    switch ($transformation) {
        case 'gras':
            $str = preg_replace_callback('/\b[A-Z][a-z]*\b/', function($match) {
                return '<strong>' . $match[0] . '</strong>';
            }, $str);
            break;
        case 'cesar':
            $str = caesarCipher($str);
            break;
        case 'plateforme':
            $str = preg_replace('/\b\w+me\b/', '_', $str);
            break;
        default:
            echo "Veuillez sélectionner une transformation.";
    }
    
    echo "<p>Résultat de la transformation: $str</p>";
}

function caesarCipher($str, $shift = 2) {
    $result = "";
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $result .= chr((ord( strtolower($char) ) - 97 + $shift) % 26 + 97);
        } else {
            $result .= $char;
        }
    }
    return $result;
}
?>

</body>
</html>
