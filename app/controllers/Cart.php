<?php
// CartController.php

class CartController {
    public function viewCart() {
        // Récupérer les articles du panier de l'utilisateur

        // Afficher la vue du panier
        include 'views/product/cart.php';
    }

    public function checkout() {
        // Vérifier si l'utilisateur est connecté, sinon rediriger vers la page de connexion

        // Gérer le processus de commande, y compris la sélection de la méthode de paiement

        // Afficher la vue du processus de commande
        include 'views/order/checkout.php';
    }
}
?>
