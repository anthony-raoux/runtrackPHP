<?php
    if (!empty($_POST)) {
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        foreach ($_POST as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p style="text-align: center;">Aucun argument GET n\'a été fourni.</p>';
    }
?>

