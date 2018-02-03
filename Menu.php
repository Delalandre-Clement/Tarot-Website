<!-- Menu -->
<div id="conteneur">
    <div class="element"><a href="http://www.fftarot.fr/assets/documents/R-RO201206.pdf">Regles du jeu (FFTarot)</a></div>
    <?php 
        if(!isset($_SESSION['pseudo'])){    
            echo '<div class=' . '"element"' . '><a href=' . "./Inscription.php" . '>' . "Inscription" . '</a></div>';
        }
        else{
            echo '<div class=' . '"element"' . '><a href=' . "./ChatPublic.php" . '>' . "Chat Online" . '</a></div>';
        }
    ?>
    <div class="element">Telecharger le jeu de tarot</div>
</div>