<!-- Menu -->
<div id="conteneur">
    <?php 
        if($_SERVER['PHP_SELF']=="/Tarot-Website/index.php"){
            echo '<div class=' . '"element"' . '><a href=' . "./index.php" . '>' . "Accueil" . '</a></div>';
        }
        else{
            echo '<div class=' . '"element"' . '><a href=' . "../index.php" . '>' . "Accueil" . '</a></div>';
        }
        
        if(!isset($_SESSION['utilisateur'])){
            echo '<div class=' . '"element"' . '><a href=' . "./Inscription/Inscription.php" . '>' . "Inscription" . '</a></div>';
        }
        else{
            echo '<div class=' . '"element"' . '><a href=' . "./Chat/ChatPublic.php" . '>' . "Chat Online" . '</a></div>';
        }
    ?>
    <div class="element"><a href="http://www.fftarot.fr/assets/documents/R-RO201206.pdf">Regles du jeu (FFTarot)</a></div>
    <?php 
        if(isset($_SESSION['utilisateur'])){
            echo '<div class=' . '"element"' . '><a href=' . '"./Telechargement/Jeu_Tarot.zip"' . 'download=' . '"Jeu_Tarot"' . '>Telecharger le jeu de tarot</div>';
        }
    ?>
</div>