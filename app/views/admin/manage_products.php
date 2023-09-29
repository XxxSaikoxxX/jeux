<!-- manage_products.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gérer les Produits - Administration</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Gérer les Produits - Administration</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour afficher la liste des produits avec leurs détails -->
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product->id; ?></td>
                    <td><?php echo $product->nom; ?></td>
                    <td><?php echo $product->prixUnitaire; ?></td>
                    <td><?php echo $product->quantite; ?></td>
                    <td>
                        <a href="#">Modifier</a> |
                        <a href="#">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="#">Ajouter un nouveau produit</a>
</body>
</html>
