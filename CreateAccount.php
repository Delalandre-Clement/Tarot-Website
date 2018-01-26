<html>
    <head>
            <style>
            
            </style>
    </head>

    <!-- Page principale du site -->
    <body>
        <?php // Connexion à la base de données
            $bdd = new PDO('mysql:host=localhost;dbname=tarotwebsite;charset=utf8', 'clem7622', 'Tarot76');
            // Ajout des informations du formulaire dans la Database
            $req = $bdd->prepare('INSERT INTO utilisateurs(Pseudo, Genre, Mail, Password, Region) VALUES(?,?,?,?,?)');//les '?' sont les zones de remplissage 
            $req->execute(array($_POST['pseudo'],$_POST['genre'],$_POST['mail'],$_POST['mdp'],$_POST['lieu']));//où viennent se loger les variables.
            echo 'Votre compte a bien été créé !';
        ?>
        
    <a href=./index.php> Retour</a>
    </body>
</html>


