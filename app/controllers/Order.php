<?php
// OrderController.php

class OrderController {
    public function orderHistory() {
        // Vérifier si l'utilisateur est connecté, sinon rediriger vers la page de connexion

        // Récupérer l'historique des commandes de l'utilisateur depuis la base de données

        // Afficher la vue de l'historique des commandes
        include 'views/order/history.php';
    }
}
?>
