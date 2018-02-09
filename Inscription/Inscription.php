<?php
session_start();    //Demarrage de la session
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="../Visuel/VisuelInscription.css" />
    </head>

    <body>
        
         <!-- Tête de la page -->
        <header>
            <h1>Formulaire d'inscription</h1>
            <?php include("../Connexion/ZoneConnexion.php"); ?>
            <?php include("../Template/Menu.php"); ?>
        </header>

        <!-- Centre de la page -->
        <section>
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
                            <input type="email" name="mail" id='mail' maxlength="25" required />
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
                    <br>
                    <input type="submit" value="S'inscrire" />
                    <input type="reset" value="Reinitialiser"/>
                    <input type="button" value="Annuler" onClick="window.history.back()">
                </table>
            </form>
        </section>

        <footer>
            <!-- Insertion du Pied de page -->
            <?php include("../Template/Pied_de_page.php"); ?>
        </footer>
    </body>
</html>