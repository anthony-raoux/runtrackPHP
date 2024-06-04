<?php
    $nombre_arguments = 0;

    foreach ($_POST as $key => $value) {
        $nombre_arguments++;
    }

    echo "<p>Nombre d'arguments GET reçus: " . $nombre_arguments . "</p>";
?>
