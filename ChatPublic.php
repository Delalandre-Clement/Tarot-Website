<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <body>
    
    <form action="ChatPublic_Post.php" method="post">
        <p>
        <label for="Pseudo">Pseudo</label> : <input type="text" name="Pseudo" id="Pseudo" /><br />
        <label for="Pessage">Message</label> :  <input type="text" name="Message" id="Message" /><br />

        <input type="submit" value="Envoyer" />
        <br><a href="./index.html">Retour</a></li>
        <br><br>
        <p><strong> Les 20 derniers messages : </strong></p>
	</p>
    </form>

    <?php
    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=tarotwebsite;charset=utf8', 'clem7622', 'Tarot76');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT Pseudo, Message FROM chatpublic ORDER BY ID DESC LIMIT 0, 20');

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['Pseudo']) . '</strong> : ' . htmlspecialchars($donnees['Message']) . '</p>';
    }

    $reponse->closeCursor();

    ?>

    </body>
</html>