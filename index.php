<?php
require_once './Classes/Utilisateur.php';

session_start();    //Demarrage de la session

if(isset($_SESSION['utilisateur'])){
    $utilisateur = $_SESSION['utilisateur'];
}
?>

<!DOCTYPE HTML>
<html>
    <head>
            <link rel="stylesheet" href="./Visuel/Visuel.css" />
    </head>

    <!-- Page principale du site -->
    <body>
        <!-- Titre encadrés d'images -->
        <header>
            <h1><img src="Image/Icone.png" width="60"></img>   Tarot   <img src="Image/Icone.png" width="60"></h1>

            <!-- Insertion de la zone de connexion -->
            <?php 
                if(!isset($_SESSION['utilisateur'])){    
                    include("./Connexion/ZoneConnexion.php");   // Affiche la zone de connexion si pas connecté
                }
                else{
                    include("./Connexion/ZoneConnecte.php");    // Affiche la zone personalisée si connecté
                }
            ?>

            <!-- Insertion du Menu -->
            <?php include("./Template/Menu.php"); ?>

        </header>

        <section>
            <h3>Bonjour et bienvenue sur mon site web consacré au tarot.<h3>
            <p>Ici, vous pourrez décourir les règles du tarot ainsi que suivre l'avancement de mon projet de jeu de tarot.<p>
            <p>Si vous souhaitez vous inscrire, un espace membre comprenant un chat avec les autres membres et un accès à une version non finale du jeu est disponible.<br> <p>
            <p>Pour toute personne souhaitant participer à l'avancement de mon projet, vous avez la possibilitée d'accéder à mon dépot Github contenant mon répertoire de travail.<p>
            <p> Débutant ou expérimenté, n'hésitez pas !<p>
        </section>

        <footer>
            <!-- Insertion du Pied de page -->
            <?php include("./Template/Pied_de_page.php"); ?>
        </footer>
    </body>
</html>