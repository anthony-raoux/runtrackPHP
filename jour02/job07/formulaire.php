<?php
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];

    for ($i = 0; $i < $hauteur; $i++) {
        echo str_repeat(' ', $largeur - $i - 1);
        echo str_repeat('^', 2 * $i + 1);
        echo '<br>';
    }

    for ($i = 0; $i < $hauteur; $i++) {
        echo str_repeat('|', $largeur * 2 - 1);
        echo '<br>';
    }
?>
