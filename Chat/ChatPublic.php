<?php
require_once '../Classes/Utilisateur.php';

session_start();    //Demarrage de la session

if(isset($_SESSION['utilisateur'])){
    $utilisateur = $_SESSION['utilisateur'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" href="../Visuel/Visuel.css" />
    </head>
    <body>

        <!-- Tête de la page -->
        <header>
            <h1>Chat Public</h1>
            <?php include("../Connexion/ZoneConnecte.php"); ?>
            <?php include("../Template/Menu.php"); ?>
        </header>

        <!-- Centre de la page -->
        <section>
            <!--Formulaire -->
            <form action="ChatPublic_Post.php" method="post">
                <p>
                    <label for="Message">Message</label> :  <br><br><input type="text" name="Message" id="Message" />
                    <br><br><input type="submit" value="Envoyer" /><br><br><br><br>
                    <p><strong> Les 20 derniers messages : </strong></p>
                </p>
            </form>

            <!-- Affichage des derniers messages -->
            <div id="messages">
                <?php include("./AfficheMessage.php"); ?>
            </div>
        </section>
        

        <!-- Pied de page -->
        <footer>
            <?php include("../Template/Pied_de_page.php"); ?>
        </footer>

    </body>
</html>