<!-- Zone Connecte -->
<div id="connect_zone">
    <form action="Deconnexion.php" method="post">
        <tr>
            <td><br><img src="../Image/Profil2.png" width="60"></img> <td>
            <td><br><label><?php echo $_SESSION['pseudo'];?></label></td>
        </tr>
        <tr>
            <br><input type="submit" value="Deconnexion"/>
        </tr>
    </form>
</div>