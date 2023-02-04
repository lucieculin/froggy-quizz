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



// Vérification envoie formulaire
 if (empty($_POST)) ;
    // Le formulaire a été envoyé
    // Vérification que tous les champs requis sont remplis
    if (isset($_POST["userName"], $_POST["password"])
        && !empty(["userName"]) && !empty(["password"])) {
        // Vérification de la validité de l'email
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("Ceci n'est pas une adresse valide");
        }

    }

    // Connexion BDD
    $query = "SELECT * FROM `users` WHERE `email` = :email";

    $query = $this->pdo->prepare($this);

    $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);

    $query->execute();

    $user = $query->fetch();

    dump($user);
    die;

    if (!$user) {
        die("L'utilisateur n'existe pas");
    }

    // User existant, vérification password
    if (!password_verify($_POST["password"], $user["password"])) {
        die("L'utilisateur et/ou le password est incorrect");
        {
            // Utilisateur et password corrects
            // Connexion de l'utilisateur


            // Stockage des infos utilisateur dans $_SESSION
            $_SESSION["user"] = [
                "id" => $user["id"],
                "userName" => $user["userName"],
                "email" => $user["email"],
                "role" => $user["role"]
            ];
            // Redirection page mon_compte
            header("Location: mon_compte.php");
        }


    }
        // Enregistrement en BDD
        $query = "INSERT INTO `users`(`userName`, `firstName`, `lastName`, `email`, `password`, `role`) 
        VALUES (:userName, :email, '$password', '[\"ROLE_USER\"]')";
        $query = $data->prepare($query);
        $query->bindValue(":userName", $userName, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();

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
                    <input type="submit" value="Connexion">
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