<?php
// User.php (Model)

class User {
    // Propriétés correspondant aux colonnes de la table Utilisateur
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $mot_de_passe;
    public $telephone;
    public $date_naissance;
    public $date_de_creation;
    public $date_mise_jour;
    
    // Méthodes pour enregistrer, récupérer et mettre à jour les utilisateurs
    public function save() {
        // Code pour enregistrer les données de l'utilisateur dans la base de données
    }

    public static function getById($id) {
        // Code pour récupérer un utilisateur par son ID depuis la base de données
    }

    public function update() {
        // Code pour mettre à jour les données de l'utilisateur dans la base de données
    }

    // Autres méthodes utiles liées aux utilisateurs
}
?>
