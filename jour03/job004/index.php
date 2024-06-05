<?php
$products = [
    ["name" => "clavier", "price" => 80, "quantity" => 2],
    ["name" => "écran", "price" => 120, "quantity" => 1],
    ["name" => "sac", "price" => 50, "quantity" => 3],
    ["name" => "lunette", "price" => 150, "quantity" => 1]
];

include 'fonctions.php'; 

applyDiscount($products);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des produits</title>
</head>
<body>

<h2>Liste des produits</h2>

<?php include 'produits.php'; ?> 

</body>
</html>
