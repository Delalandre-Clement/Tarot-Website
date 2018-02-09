<?php
    session_start();    //Demarrage de la session
    require_once 'Utilisateur.php';

    $utilisateur = Utilisateur::getUtilisateurFromLoginPwd($_POST['pseudo'], $_POST['mdp']);
    $_SESSION['utilisateur'] = $utilisateur;

    // Redirection vers la page principale
    header('Location: index.php');
?>