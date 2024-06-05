<?php
function applyDiscount(&$products) {
    foreach($products as &$product) {
        if($product['price'] > 100) {
            $product['price'] *= 0.9; // Réduction de 10%
        }
    }
}
?>
