<?php
function calcule(float $nombre1, string $operation, float $nombre2): mixed {
    $resultat = 0;

    if ($operation == '+') {
        $resultat = $nombre1 + $nombre2;
    } elseif ($operation == '-') {
        $resultat = $nombre1 - $nombre2;
    } elseif ($operation == '*') {
        $resultat = $nombre1 * $nombre2;
    } elseif ($operation == '/') {
        if ($nombre2 != 0) {
            $resultat = $nombre1 / $nombre2;
        } else {
            return "Erreur : Division par zéro";
        }
    } elseif ($operation == '%') {
        if ($nombre2 != 0) {
            $resultat = $nombre1 % $nombre2;
        } else {
            return "Erreur : Division par zéro";
        }
    } else {
        return "Erreur : Opération invalide";
    }

    return $resultat;
}

echo calcule(7, '+', 5);  
echo "\n"; 
echo calcule(10, '-', 4);  
echo "\n"; 
echo calcule(19, '*', 6);  
echo "\n"; 
echo calcule(30, '/', 8);  
echo "\n"; 
echo calcule(10, '%', 5); 
?>
