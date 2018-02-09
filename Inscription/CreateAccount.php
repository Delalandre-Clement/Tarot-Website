<?php
session_start();    //Demarrage de la session
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="../Visuel/Visuel.css" />
    </head>

    <!-- Page principale du site -->
    <body>
        <?php // Connexion à la base de données
            $bdd = new PDO('mysql:host=localhost;dbname=tarotwebsite;charset=utf8', 'clem7622', 'Tarot76');
            // Ajout des informations du formulaire dans la Database
            $req = $bdd->prepare('INSERT INTO utilisateurs(Pseudo, Genre, Mail, Password, Region) VALUES(?,?,?,?,?)');//les '?' sont les zones de remplissage 
            $req->execute(array($_POST['pseudo'],$_POST['genre'],$_POST['mail'],$_POST['mdp'],$_POST['lieu']));//où viennent se loger les variables.
            $_SESSION['pseudo']=$_POST['pseudo'];
            echo 'Votre compte a bien été créé !';
        ?>
        
        <input type="button" value="Retour" onClick="self.location.href='../index.php'">
    <footer>
        <!-- Insertion du Pied de page -->
        <?php include("../MiseEnPage/Pied_de_page.php"); ?>
    </footer>
    </body>
</html>


