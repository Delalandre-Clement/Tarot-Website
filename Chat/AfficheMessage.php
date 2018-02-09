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