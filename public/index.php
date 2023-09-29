<!DOCTYPE html>
<html>
<head>
    <title>Votre Site de Commerce Électronique</title>
    <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Jeux Pas REALISABLE</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="products.php">Produits</a></li>
                <li><a href="cart.php">Panier</a></li>
                <li><a href="orders.php">Commandes</a></li>
                <li><a href="profile.php">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Le contenu principal de vos pages sera affiché ici en fonction de la navigation -->

        <?php
            // Utilisez les vues correspondantes pour afficher le contenu en fonction de la page demandée
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                if ($page === 'products') {
                    include 'app/views/product/list.php';
                } elseif ($page === 'cart') {
                    include 'app/views/product/cart.php';
                } elseif ($page === 'orders') {
                    include 'app/app/views/order/history.php';
                } elseif ($page === 'profile') {
                    include 'views/user/profile.php';
                } else {
                    // Page par défaut (accueil)
                    include 'app/views/dashboard.php';
                }
            } else {
                // Page par défaut (accueil)
                include 'app/views/admin/dashboard.php';
            }
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Manque d'explication.inc. Tous droits réservés.</p>
    </footer>

    <!-- Lien vers votre fichier JavaScript -->
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
