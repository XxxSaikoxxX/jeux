<!-- checkout.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Passer la Commande</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Passer la Commande</h1>
    <form action="process_order.php" method="post">
        <!-- Formulaire de saisie des informations de livraison et de paiement -->
        <label for="method">Méthode de Paiement :</label>
        <select name="method" id="method">
            <option value="paypal">PayPal</option>
            <option value="carte">Carte de Crédit</option>
        </select>
        <!-- Autres champs pour les informations de livraison -->
        <button type="submit">Passer la Commande</button>
    </form>
</body>
</html>
