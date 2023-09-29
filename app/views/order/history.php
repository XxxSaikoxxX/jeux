<!-- history.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Historique des Commandes</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Historique des Commandes</h1>
    <table>
        <thead>
            <tr>
                <th>ID Commande</th>
                <th>Montant total</th>
                <th>Statut</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour afficher l'historique des commandes -->
            <?php foreach ($orderHistory as $order) { ?>
                <tr>
                    <td><?php echo $order->id; ?></td>
                    <td><?php echo $order->totalAmount; ?></td>
                    <td><?php echo $order->status; ?></td>
                    <td><?php echo $order->date; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
