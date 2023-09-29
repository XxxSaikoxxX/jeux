<!-- details.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Détails du Produit</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <!-- Afficher les détails du produit -->
    <h1><?php echo $product->nom; ?></h1>
    <p><?php echo $product->description; ?></p>
    <p>Prix : <?php echo $product->prixUnitaire; ?></p>
    <p>Quantité en Stock : <?php echo $product->quantite; ?></p>
    <a href="#">Ajouter au Panier</a>
</body>
</html>
