<html>
    <head>
            <style>
            
            </style>
    </head>

    <!-- Page principale du site -->
    <body>
        <?php
            $mdp="modepa";
            if($mdp==$_POST ['mdp']){
                echo "<h1>Felicitation vous avez saisi le bon mot de passe : </h1>";
            }
            else{
                echo "<h1>Desole mais votre mot de passe est incorect.</h1>";
            }

        ?>
    </body>
</html>