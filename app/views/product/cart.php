<!-- cart.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Panier d'Achat</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Panier d'Achat</h1>
    <ul>
        <!-- Boucle pour afficher les articles dans le panier -->
        <?php foreach ($cartItems as $item) { ?>
            <li>
                <h2><?php echo $item->product->nom; ?></h2>
                <p>Prix : <?php echo $item->product->prixUnitaire; ?></p>
                <p>Quantité : <?php echo $item->quantity; ?></p>
                <a href="#">Supprimer</a>
            </li>
        <?php } ?>
    </ul>
    <p>Total : <?php echo $cartTotal; ?></p>
    <a href="#">Passer la Commande</a>
</body>
</html>
