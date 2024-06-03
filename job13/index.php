<?php

function occurrences($str, $char) {
    $occurrences = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $occurrences++;
        }
    }
    
    return $occurrences;
}

$str = "aaaaaaaa";
$char = "a";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);

?>
