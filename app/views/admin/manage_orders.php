<!-- manage_orders.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gérer les Commandes - Administration</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Gérer les Commandes - Administration</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Montant total</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour afficher la liste des commandes avec leurs détails -->
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><?php echo $order->id; ?></td>
                    <td><?php echo $order->userId; ?></td>
                    <td><?php echo $order->totalAmount; ?></td>
                    <td><?php echo $order->status; ?></td>
                    <td>
                        <a href="#">Voir les détails</a> |
                        <a href="#">Modifier le statut</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
