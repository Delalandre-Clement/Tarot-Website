<?php
    session_start(); // Recuperation de la session active
    session_destroy(); // Destruction de la session
?>

<!DOCTYPE html>
<?php
    // Retour à l apage principale du site
    if($_SERVER['PHP_SELF']=="/Tarot-Website/index.php"){
        header('Location: ./index.php');
    }
    else{
        header('Location: ../index.php');
    }
    
?>