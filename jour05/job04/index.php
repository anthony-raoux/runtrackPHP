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

$sql = 'SELECT nom, capacite FROM salle';
$stmt = $pdo->query($sql);
$salles = $stmt->fetchAll();

if ($salles) {
    echo '<table border="1">';
    
    echo '<thead><tr>';
    echo '<th>Nom</th>';
    echo '<th>Capacité</th>';
    echo '</tr></thead>';
    
    echo '<tbody>';
    foreach ($salles as $salle) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($salle['nom']) . '</td>';
        echo '<td>' . htmlspecialchars($salle['capacite']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    
    echo '</table>';
} else {
    echo 'Aucune salle trouvée.';
}
?>
