<!DOCTYPE HTML>
<html>
    <head>
            <link rel="stylesheet" href="Visuel.css" />
    </head>

    <!-- Page principale du site -->
    <body>
        <!-- Titre encadrés d'images -->
        <header>
            <h1><img src="Icone.png" width="40"></img> Tarot <img src="Icone.png" width="40"></h1>

            <!-- Insertion de la zone de connexion -->
            <?php include("ZoneConnexion.php"); ?>

            <!-- Insertion du Menu -->
            <?php include("Menu.php"); ?>

        </header>
        
        <footer>
            <!-- Insertion du Pied de page -->
            <?php include("Pied_de_page.php"); ?>
        </footer>
    </body>
</html>