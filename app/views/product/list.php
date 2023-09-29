<!-- list.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Liste des Produits</h1>
    <ul>
        <!-- Boucle pour afficher la liste des produits -->
        <?php foreach ($products as $product) { ?>
            <li>
                <h2><?php echo $product->nom; ?></h2>
                <p><?php echo $product->description; ?></p>
                <p>Prix : <?php echo $product->prixUnitaire; ?></p>
                <a href="#">Ajouter au Panier</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
