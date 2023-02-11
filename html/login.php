<?php

use App\Repository\UserRepository;

error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "login";
include('../partials/header.php');


$userRepository = new UserRepository();
$data = new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password: '');

//Instanciation du repository
$user = new UserRepository();


@$userName = $_POST["userName"];
@$password = md5($_POST["password"]);
@$connexion = $_POST["Connexion"];
$erreur = "";

if (!empty($_POST)) {

    // User existant, vérification password

    if (!password_verify($_POST["password"], $user["password"])) {
        die("L'utilisateur et/ou le password est incorrect"); {
            // Utilisateur et password corrects
            // Connexion de l'utilisateur

        }
    }
}


if (isset($connexion)) {

    $selection = $data->prepare("select * from users where userName=? and password=? limit 1");
    $selection->execute(array($userName, $password));
    $tab = $selection->fetchAll();
    if (count($tab) > 0) {
        $_SESSION["userName"] = ucfirst(strtolower($tab[0]["userName"]));
        $_SESSION["autoriser"] = "oui";
        header("location:mon_compte.php");
    } else
        $erreur = "Mauvais login ou mot de passe!";
}


?>







<main>
    
    <section class="contact">
        
        <form class="contact-form" action="" method="POST">
            
            <h2>Connexion</h2>
            
            <div class="label-input">
                <label for="userName">Pseudo Frog:</label>
                <input type="text" id="userName" name="userName" placeholder="Saisissez votre pseudo...">
            </div>
            
            <div class="label-input">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password" name="password" placeholder="Saisissez un mot de pass...">
            </div>
            
            
            <div class="submit">
                <input type="submit" name="logged" value="Connexion">
            </div>
            
        </form>
        <div class="to-register">
            <a href="./register.php">Créer un compte.</a>
        </div>

    </section>
    
</main>


<?php
include('../partials/footer.php')
?>