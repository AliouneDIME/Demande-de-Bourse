<?php
session_start(); // Démarrage de la session
require_once 'config.php'; // On inclut la connexion à la base de données

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // Patch XSS
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $email = strtolower($email); // email transformé en minuscule

    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $bdd->prepare('SELECT prenom, nom, email, password, token FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    // On regarde si l'utilisateur est un administrateur
    $checkAdmin = $bdd->prepare('SELECT id FROM administrateurs WHERE email = ? AND password = ?');
    $checkAdmin->execute(array($email, $password));
    $isAdmin = $checkAdmin->rowCount();

    // Si l'utilisateur est un administrateur
    if ($isAdmin > 0) {
        // On créer la session et on redirige vers la page d'administration
        $_SESSION['admin'] = true;
        header('Location: admin_panel/index.php');
        die();
    }

    // Si l'utilisateur est un utilisateur normal
    if ($row > 0) {
        // Si le mail est bon niveau format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Si le mot de passe est le bon
            if (password_verify($password, $data['password'])) {
                // On créer la session et on redirige sur landing.php
                $_SESSION['user'] = $data['token'];
                header('Location: landing.php');
                die();
            } else {
                header('Location: index.php?login_err=password');
                die();
            }
        } else {
            header('Location: index.php?login_err=email');
            die();
        }
    } else {
        header('Location: index.php?login_err=already');
        die();
    }
} else {
    header('Location: index.php');
    die();
}
?>