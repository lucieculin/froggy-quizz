<?php

use App\Repository\UserRepository;
use App\Class\User;


error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "register";
include('../partials/header.php');


$userRepository = new UserRepository();
$data = new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password: '');



if (isset($_SESSION["user"])) {

    //Ajouter un include vers Mon compte/Login
}
// Vérification envoie formulaire
if (empty($_POST)) {
// Le formulaire a été envoyé
// Vérification que tous les champs requis sont remplis
    if (isset($_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["userName"], $_POST["password"])
        && !empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty(["email"]) && !empty(["userName"]) && !empty(["password"])
    ) {
// Le formulaire est complet

// Protection des données
        $userName = strip_tags($_POST["userName"]);

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          
        }

// Hachage du password
        $password = password_hash($_POST["password"], PASSWORD_ARGON2I);


// AJOUTER CONTRÔLES DU PASSWORD ICI !!!!


// Stockage des infos utilisateur dans $_SESSION
        $_SESSION["user"] = [
            "userName" => $userName,
            "email" => $_POST["email"],
            "role" => ["ROLE_USER"]
        ];
        
    }
}
// Redirection page mon_compte


?>


<main>

    <section class="contact">

        <form class="contact-form" method="GET">

            <h2>Inscription</h2>

            <div class="firstName">
                <label for="firstName">Nom:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Saisissez votre nom...">
            </div>


            <div class="lastName">
                <label for="lastName">Prénom:</label>
                <input type="text" id="lastName" name="lastName" placeholder="Saisissez votre prénom...">
            </div>


            <div class="email">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Saisissez votre email...">
            </div>

            <div class="userName">
                <label for="userName">Pseudo Frog:</label>
                <input type="text" id="userName" name="userName" placeholder="Saisissez votre pseudo...">
            </div>

            <div class="password">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password" name="password" placeholder="Saisissez un mot de pass...">
            </div>

            <div class="password_retype">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password_retype" name="password_retype" placeholder="Confirmez le mot de pass...">
            </div>
            <div class="submit">
                <input type="submit" name="create" value="ENVOYER">
            </div>


            <?php if(!empty($_GET['create']) && isset($_GET["firstName"]) && isset($_GET["lastName"]) && isset($_GET["email"]) && isset($_GET["userName"]) && isset($_GET['password']) && isset($_GET['password_retype'])){
                $userFirstName = $_GET["firstName"];
                $userLastName = $_GET["lastName"];
                $userEmail = $_GET["email"];
                $userUserName = $_GET["userName"];
                $userPassword = $_GET["password"];


                $addUser = $data->query("INSERT INTO users (users.username, users.name, users.lastname, users.email, users.password) VALUES ('$userUserName', '$userFirstName', '$userLastName', '$userEmail', '$userPassword' );");
            }

            ?>
        </form>
    </section>


</main>


<?php

if(isset($_POST["create"])){
    // createUser($user);
}
include('../partials/footer.php')
?>
