// index.js

// Exemple de fonction pour ajouter un produit au panier via une requête AJAX
function addToCart(productId) {
    // Effectuer une requête AJAX pour ajouter le produit au panier
    // Vous devrez remplacer cette partie avec le code réel pour envoyer la requête au serveur
    // et gérer la mise à jour du panier côté client
    console.log('Produit ajouté au panier :', productId);
}

// Exemple de fonction pour supprimer un produit du panier via une requête AJAX
function removeFromCart(productId) {
    // Effectuer une requête AJAX pour supprimer le produit du panier
    // Vous devrez remplacer cette partie avec le code réel pour envoyer la requête au serveur
    // et gérer la mise à jour du panier côté client
    console.log('Produit supprimé du panier :', productId);
}

// Vous pouvez ajouter d'autres fonctions et logique en fonction de vos besoins

// Événement pour ajouter un produit au panier lorsqu'un bouton est cliqué
document.querySelectorAll('.add-to-cart-button').forEach(button => {
    button.addEventListener('click', event => {
        const productId = event.target.dataset.productId;
        addToCart(productId);
    });
});

// Événement pour supprimer un produit du panier lorsqu'un bouton est cliqué
document.querySelectorAll('.remove-from-cart-button').forEach(button => {
    button.addEventListener('click', event => {
        const productId = event.target.dataset.productId;
        removeFromCart(productId);
    });
});
