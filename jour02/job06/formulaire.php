<?php
    $nombre = $_GET['nombre'];

    if ($nombre % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
?>
