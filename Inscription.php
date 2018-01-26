<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="VisuelInscription.css" />
    </head>

    <body>
        <h1>Formulaire d'inscription</h1>

        <form action="CreateAccount.php" method="post">
            <table>
                <tr>
                    <td>
                        <label>Pseudo *</label> :
                    </td>
                    <td>
                        <input type="text" name="pseudo" id="pseudo" required />
                    </td>
                </tr>

                <tr>
                     <td>
                        <label>Genre :</label>
                    </td>
                    <td>
                        <input type="text" name="genre" id="genre" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Mail *</label> :
                    </td>
                    <td>
                        <input type="email" name="mail" maxlength="25" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Mot de Passe *</label> :
                    </td>
                    <td>
                        <input type="password" name="mdp" id="mdp" maxlength="50" required/>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Localisation</label> :
                    </td>
                    <td>
                        <input type="text" name="lieu" id="lieu" maxlength="50"/>
                    </td>
                </tr>
                    
            </table>
            <br>
            <input type="submit" value="S'inscrire" />
            <input type="reset" value="Reinitialiser"/>
            <input type="button" value="Annuler" onClick="window.history.back()">
        </form>
    </body>
</html>