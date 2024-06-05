<?php

function leet_speak($str) {
    $leet_characters = array(
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7',

    
    );
    
    $str = strtolower($str);
    
    foreach ($leet_characters as $normal_char => $leet_char) {
        $str = str_replace($normal_char, $leet_char, $str);
    }
    
    return $str;
}

$phrase = "blague Leet speak!";
echo "'$phrase' : " . leet_speak($phrase);

?>
