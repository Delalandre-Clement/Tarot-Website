<!-- Zone Connecte -->
<div id="connect_zone">
    <form action="./Connexion/Deconnexion.php" method="post">
        <tr>
            <?php 
                if($_SERVER['PHP_SELF']=="/Tarot-Website/index.php"){
                    echo '<td><br><img src=' . '"./Image/Profil2.png"' . 'width=' . '"60" ' . '></img> <td>';
                }
                else{
                    echo '<td><br><img src=' . '"../Image/Profil2.png"' . 'width=' . '"60" ' . '></img> <td>';
                }
            ?>
            <td><br><label><?php echo $utilisateur->nom;?></label></td>
        </tr>
        <tr>
            <br><input type="submit" value="Deconnexion"/>
        </tr>
    </form>
</div>