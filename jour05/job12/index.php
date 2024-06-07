<?php
$host = '127.0.0.1';
$db = 'jour05';
$user = 'root'; 
$pass = '';    
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$sql = 'SELECT * FROM salle ORDER BY capacite ASC';
$stmt = $pdo->query($sql);
$etudiants = $stmt->fetchAll();

if ($etudiants) {
    echo '<table border="1">';
    
    echo '<thead><tr>';
    foreach (array_keys($etudiants[0]) as $header) {
        echo '<th>' . htmlspecialchars($header) . '</th>';
    }
    echo '</tr></thead>';

    echo '<tbody>';
    foreach ($etudiants as $etudiant) {
        echo '<tr>';
        foreach ($etudiant as $value) {
            echo '<td>' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    
    echo '</table>';
} else {
    echo 'Aucun étudiant trouvé.';
}
?>
