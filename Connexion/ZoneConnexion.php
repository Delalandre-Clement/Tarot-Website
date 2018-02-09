<!-- Zone Connexion -->
<form action="./Connexion/Login.php" method="post">
    <div id="log_zone">
        <tr>
            <td><label>Utilisateur :</label></td>
            <td><div id="user"><input type="text" name="pseudo" id="pseudo" required /></div></td>
        </tr>
        <tr>
            <td><label>Mot de passe :</label></td>
            <td><div id="mdpasse"><input type="password" name="mdp" id="mdp" required /></div></td>
        </tr>
        <tr>
            <input type="submit" value="Connexion"/>
        </tr>
    </div>
</form>