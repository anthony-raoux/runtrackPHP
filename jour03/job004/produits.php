<table border='1'>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantité</th>
    </tr>
    <?php foreach($products as $product): ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?> €</td>
            <td><?php echo $product['quantity']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

