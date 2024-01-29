<?php
require_once "models/user.class.php"

try{
    $connDB = new PDO ('pgsql:host=localhost;dbname=planimmo','root','');
}  catch(Exception $e) {
    echo 'erreur';
    die('Erreur : '.$e->getMessage());
}

if(isset($_POST["identifier"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    extract($_POST);
    $identifier = $_POST["identifier"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    $req = $connDB->query("SELECT * FROM user_immo WHERE login_user = '$identifier' AND email = '$email'AND password_user = '$pwd'"); 

    if($req->rowCount() > 0) {
        echo 'Connexion réussie ! Redirection ...';
    } else {
        echo 'Adresse e-mail ou mot de passe incorrect';
    }

    $req->closeCursor();
    $connexion = null;
}


?>