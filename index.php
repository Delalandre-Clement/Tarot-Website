<!DOCTYPE HTML>
<html>
    <head>
            <link rel="stylesheet" href="Visuel.css" />
    </head>

    <!-- Page principale du site -->
    <body>
        <div id="body">
            <!-- Titre encadrés d'images -->
            <header>
                <h1><img src="Icone.png" width="25"></img> Bienvenue sur mon site web consacre au Tarot <img src="Icone.png" width="25"></h1>

                <!-- Insertion de la zone de connexion -->
                <?php include("ZoneConnexion.php"); ?>

                <!-- Insertion du Menu -->
                <?php include("Menu.php"); ?>

            </header>

            <!-- Paragraphe de présentation du site -->
            <h2>Objectifs du site :<br></h2>
            <p>Voici mon premier site web consacre au jeu de tarot.<br/>Ici, vous pourrez apprendre les regles du tarot et telecharger le jeu de tarot que j'ai developpe.</p>
            
            <footer>
                <!-- Insertion du Pied de page -->
                <?php include("Pied_de_page.php"); ?>
            </footer>
        </div>
    </body>
</html>