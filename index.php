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
               

                <!-- Zone Connexion -->
                <div id="log_zone">
                    <tr>
                        <td><label>Utilisateur :</label></td>
                        <td><div id="user"><input type="text" name="pseudo" id="pseudo" required /></div></td>
                    </tr>
                    <tr>
                        <td><label>Mot de passe :</label></td>
                        <td><div id="mdpasse"><input type="password" name="mdp" id="mdp" required /></div></td>
                    </tr>
                </div>
                <br>
                <h1><img src="Icone.png" width="40"></img> Bienvenue sur mon site web consacre au Tarot <img src="Icone.png" width="40"></h1>
                <!-- Menu -->
                <br>
                <div id="conteneur">
                    <div class="element"><a href="http://www.fftarot.fr/assets/documents/R-RO201206.pdf">Regles du jeu (FFTarot)</a></div>
                    <div class="element"><a href="./Inscription.html">Inscription</a></div>
                    <div class="element">Telecharger le jeu de tarot</div>
                        <!--
                            <li><a href="./PageTelechargement">Windows</a></li>
                            <li>Linux</li>
                            <li><a href="https://www.apple.com/">Mac OS</a></li>
                        -->
                    <div class="element"><a href="./ChatPublic.php">Chat Online</a></div>
                </div>

            </header>
        </div>
    </body>
</html>