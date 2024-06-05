<?php

function occurrences(string $str, string $char) {
    $occurrences = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $occurrences++;
        }
    }
    
    return $occurrences;
}

$str = "oooohdkgrjpdogdo";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);

?>
