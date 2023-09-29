<?php
// UserController.php

class UserController {
    public function register() {
        // Gestion du formulaire d'inscription
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Valider et enregistrer les données d'inscription
        }

        // Afficher le formulaire d'inscription
        include 'views/user/register.php';
    }

    public function login() {
        // Gestion du formulaire de connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier les informations d'identification et connecter l'utilisateur
        }

        // Afficher le formulaire de connexion
        include 'views/user/login.php';
    }

    public function profile() {
        // Vérifier si l'utilisateur est connecté, sinon rediriger vers la page de connexion

        // Récupérer les données de profil de l'utilisateur connecté depuis la base de données

        // Afficher la vue du profil utilisateur
        include 'views/user/profile.php';
    }
}
?>
