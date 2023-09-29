<!-- profile.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Profil de l'Utilisateur</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Profil de l'Utilisateur</h1>
    <h2><?php echo $user->prenom . ' ' . $user->nom; ?></h2>
    <p>Email : <?php echo $user->email; ?></p>
    <p>Téléphone : <?php echo $user->telephone; ?></p>
    <!-- Autres informations du profil de l'utilisateur -->
</body>
</html>
