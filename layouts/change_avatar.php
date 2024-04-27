<?php
session_start();
require_once '../config.php'; // Inclure le fichier de configuration de la base de données

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    die();
}

// Vérifier si un fichier a été envoyé
if (isset($_FILES['avatar_file'])) {
    $avatar = $_FILES['avatar_file'];

    // Vérifier si le fichier est une image valide
    if ($avatar['error'] === 0 && getimagesize($avatar['tmp_name']) !== false) {
        // Définir le chemin de destination pour enregistrer l'avatar
        $destination = 'avatars' . $_SESSION['user'] . '.' . pathinfo($avatar['name'], PATHINFO_EXTENSION);

        // Déplacer le fichier vers le dossier d'avatars
        if (move_uploaded_file($avatar['tmp_name'], $destination)) {
            // Mettre à jour le chemin de l'avatar dans la base de données pour l'utilisateur connecté
            $req = $bdd->prepare('UPDATE utilisateurs SET avatar = ? WHERE token = ?');
            $req->execute([$destination, $_SESSION['user']]);
            // Rediriger vers la page de profil ou une autre page appropriée
            header('Location: landing.php');
            die();
        } else {
            // Erreur lors du déplacement du fichier
            echo "Une erreur s'est produite lors du téléchargement de l'avatar.";
        }
    } else {
        // Le fichier envoyé n'est pas une image valide
        echo "Veuillez sélectionner un fichier image valide.";
    }
}
?>
