<?php

error_reporting(E_ERROR | E_NOTICE | E_PARSE);
session_start();
use App\Repository\UserRepository;
use App\Class\User;

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
    if (
        isset($_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["userName"], $_POST["password"])
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

        <form class="contact-form" method="POST">

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
                <label for="userName">Frog ID:</label>
                <input type="text" id="userName" name="userName" placeholder="Saisissez votre pseudo...">
            </div>

            <div class="password">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password" name="password" placeholder="Saisissez un mot de passe...">
            </div>

            <div class="password_retype">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password_retype" name="password_retype" placeholder="Confirmez le mot de passe...">
            </div>
            <div class="submit">
                <input type="submit" name="create" value="ENVOYER">
            </div>


            <?php if (!empty($_POST['create']) && !empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["email"]) && !empty($_POST["userName"]) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {
                if ($_POST['password'] !== $_POST['password_retype']) {
                    echo "Vos mdp ne sont pas identique";
                } else {


                    $userFirstName = $_POST["firstName"];
                    $userLastName = $_POST["lastName"];
                    $userEmail = $_POST["email"];
                    $userUserName = $_POST["userName"];
                    $userPassword = $_POST["password"];


                     $addUser = $data->query("INSERT INTO users (users.username, users.name, users.lastname, users.email, users.password) VALUES ('$userUserName', '$userFirstName', '$userLastName', '$userEmail', '$userPassword' );");

                    echo "prénom = " . $userFirstName . " / " ;
                    echo "nom = " . $userLastName . " / " ;
                    echo "mail = " . $userEmail . " / " ;
                    echo "pseudo = " . $userUserName . " / " ;
                    echo "mdp = " . $userPassword  ;
                }
            }

            ?>
        </form>
    </section>


</main>


<?php

if (isset($_POST["create"])) {
    // createUser($user);
}
include('../partials/footer.php')
?>