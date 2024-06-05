<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Résultat de la Transformation</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    
    switch($fonction) {
        case 'gras':
            $str = boldCapWords($str);
            break;
        case 'cesar':
            $str = cesarCipher($str);
            break;
        case 'plateforme':
            $str = addUnderscoreToMeWords($str);
            break;
        default:
            echo "<p>Erreur : Sélectionnez une option valide.</p>";
            exit;
    }
    
    echo "<p>Résultat de la transformation : $str</p>";
} else {
    echo "<p>Erreur : Veuillez soumettre le formulaire.</p>";
}

function boldCapWords($str) {
    return preg_replace_callback('/\b([A-Z][a-z]*)\b/', function($match) {
        return '<b>' . $match[1] . '</b>';
    }, $str);
}

function cesarCipher($str, $shift = 2) {
    return preg_replace_callback('/[a-zA-Z]/', function($match) use ($shift) {
        $code = ord($match[0]);
        $offset = ctype_upper($match[0]) ? 65 : 97;
        return chr((($code - $offset + $shift) % 26) + $offset);
    }, $str);
}

function addUnderscoreToMeWords($str) {
    return preg_replace('/\b([a-zA-Z]+)me\b/', '$1_me', $str);
}
?>

</body>
</html>
