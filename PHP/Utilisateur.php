<?php
require_once 'PDORepository.php';

 class Utilisateur extends PDORepository{

    var $idUtilisateur;
    var $nom;
    var $pwd;
     function __construct(){
        $this->nom = '';
        $this->pwd = '';
     }
     public static function getUtilisateurFromLoginPwd($login, $pwd){
        $utilisateur = new Utilisateur();
        $statement = $utilisateur->queryList('select * from utilisateurs where Pseudo=? and Password=?', array($login, $pwd));
        if($statement && $result = $statement->fetch()){
            Utilisateur::fetchFromStatement($utilisateur,$result);
            return $utilisateur;
        }
        return false;
     }
     public  function  update($args){
        $req = 'update utilisateur set Pseudo = ?, Password = ?, ';
     }
     private static function fetchFromStatement(Utilisateur  $utilisateur, $statement){
        $utilisateur->idUtilisateur = $statement['ID'];
        $utilisateur->nom = $statement['Pseudo'];
        $utilisateur->pwd = $statement['Password'];
     }
 }
?>