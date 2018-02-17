<?php
    session_start();    //Demarrage de la session
    require_once '../Classes/Utilisateur.php';

    $utilisateur = Utilisateur::getUtilisateurFromLoginPwd($_POST['pseudo'], $_POST['mdp']);
    
    //Verifie la présence utilisateur 
    if($utilisateur==''){   
        echo 'Erreur ! Utilisateur non trouvé !';
        session_destroy();
    }
    else{
        $_SESSION['utilisateur'] = $utilisateur;
    }

    // Redirection vers la page principale
    header('Location: ../index.php');
?>