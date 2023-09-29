<?php
// Product.php (Model)

class Product {
    // Propriétés correspondant aux colonnes de la table Produit
    public $id;
    public $nom;
    public $description;
    public $prixUnitaire;
    public $quantite;

    // Méthodes pour enregistrer, récupérer et mettre à jour les produits
    public function save() {
        // Code pour enregistrer les données du produit dans la base de données
    }

    public static function getById($id) {
        // Code pour récupérer un produit par son ID depuis la base de données
    }

    public function update() {
        // Code pour mettre à jour les données du produit dans la base de données
    }

    // Autres méthodes utiles liées aux produits
}
?>
