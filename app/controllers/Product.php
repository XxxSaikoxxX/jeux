<?php
// ProductController.php

class ProductController {
    public function listProducts() {
        // Récupérer la liste des produits depuis la base de données

        // Afficher la liste des produits
        include 'views/product/list.php';
    }

    public function productDetails($productId) {
        // Récupérer les détails du produit depuis la base de données en utilisant $productId

        // Afficher les détails du produit
        include 'views/product/details.php';
    }

    public function addToCart($productId) {
        // Ajouter le produit au panier de l'utilisateur (peut nécessiter des sessions/cookies)

        // Rediriger vers la liste des produits ou le panier
    }

    public function removeFromCart($productId) {
        // Supprimer le produit du panier de l'utilisateur

        // Rediriger vers le panier ou la liste des produits
    }
}
?>
