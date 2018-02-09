<?php
require_once 'Utilisateur.php';

session_start();    //Demarrage de la session

if(isset($_SESSION['utilisateur'])){
    $utilisateur = $_SESSION['utilisateur'];
}
?>

<!DOCTYPE HTML>
<html>
    <head>
            <link rel="stylesheet" href="../Visuel/Visuel.css" />
    </head>

    <!-- Page principale du site -->
    <body>
        <!-- Titre encadrés d'images -->
        <header>
            <h1><img src="../Image/Icone.png" width="60"></img>   Tarot   <img src="../Image/Icone.png" width="60"></h1>

            <!-- Insertion de la zone de connexion -->
            <?php 
                if(!isset($_SESSION['utilisateur'])){    
                    include("ZoneConnexion.php");   // Affiche la zone de connexion si pas connecté
                }
                else{
                    include("ZoneConnecte.php");    // Affiche la zone personalisée si connecté
                }
            ?>

            <!-- Insertion du Menu -->
            <?php include("Menu.php"); ?>

        </header>
        
        <footer>
            <!-- Insertion du Pied de page -->
            <?php include("Pied_de_page.php"); ?>
        </footer>
    </body>
</html>