<?php

function leet_speak($str) {
    $leet_characters = array(
        'a' => '4',
        'e' => '3',
        'l' => '1',
        'o' => '0',
        's' => '5',
        't' => '7',

    
    );
    
    $str = strtolower($str);
    
    foreach ($leet_characters as $normal_char => $leet_char) {
        $str = str_replace($normal_char, $leet_char, $str);
    }
    
    return $str;
}

$phrase = "Leet speak!";
echo "'$phrase' : " . leet_speak($phrase);

?>
