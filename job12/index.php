<?php

function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opérateur non valide";
    }
}

echo calcule(5, '+', 3); 
echo calcule(10, '-', 4); 
echo calcule(1, '*', 2); 
echo calcule(8, '/', 2);
echo calcule(15, '%', 7); 

?>
