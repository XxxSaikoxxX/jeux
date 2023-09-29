<?php
// CartItem.php (Model)

class CartItem {
    // Propriétés correspondant aux informations d'un article dans le panier
    public $id; // Peut être l'ID de l'article du panier
    public $productId; // ID du produit associé
    public $quantity; // Quantité de l'article dans le panier

    // Méthodes pour ajouter, mettre à jour et supprimer des articles du panier
    public function add() {
        // Code pour ajouter l'article au panier (utiliser des sessions/cookies)
    }

    public function update() {
        // Code pour mettre à jour la quantité de l'article dans le panier
    }

    public function remove() {
        // Code pour supprimer l'article du panier
    }

    // Autres méthodes utiles liées aux articles du panier
}
?>
