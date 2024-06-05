<?php
function bonjour(bool $jour): string {
    if ($jour) {
        return "Bonjour";
    } else {
        return "Bonsoir";
    }
}

echo bonjour(true);  
echo bonjour(false); 
?>
