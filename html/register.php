<?php

error_reporting(E_ERROR | E_NOTICE | E_PARSE);
session_start();
use App\Repository\UserRepository;
use App\Class\User;
require_once '../vendor/autoload.php';
$isPage = "register";
include('../partials/header.php');

// On initialise l'objet UserRepository
$userData = new UserRepository();


// Si le formulaire a été soumis

    // Récupération des données
    $userName = $_POST['userName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];




    // Vérification que tous les champs sont remplis
    if (empty($userName) || empty($firstName) || empty($lastName) || empty( $email) || empty( $password)) {
        $errorMessage = "Veuillez remplir tous les champs du formulaire.";
        echo "ça marche pas";
    } else {
        // Vérification que l'email n'est pas déjà utilisé
        $user = $userData->findByEmail($email);
        if ($user) {
            $errors[] = "Cet email est déjà utilisé. Veuillez en choisir un autre.";

        }else {
            // Création d'un nouvel utilisateur
            $newUser = new User();
            $newUser->setUserName($userName);
            $newUser->setFirstName($firstName);
            $newUser->setLastName($lastName);
            $newUser->setEmail($email);
            $newUser->setPassword(password_hash($password, PASSWORD_ARGON2I));
            // Enregistrement de l'utilisateur dans la base de données
            $newUser = $userData->createUser($userName, $firstName, $lastName, $email, $password);

            // Redirection vers la page de mon compte
            header('Location: mon_compte.php');
            exit;
        }
    }


?>


    <main>
        <div class="container-card">
            <section class="contact">

                <form class="contact-form" method="POST" action="register.php">

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
                        <input type="password" id="password" name="password" placeholder="Saisissez un mot de passe...">
                    </div>

                    <div class="password_retype">
                        <label for="password">Froggy Pass:</label>
                        <input type="password" id="password_retype" name="password_retype" placeholder="Confirmez le mot de passe...">
                    </div>
                    <div class="submit">
                        <input type="submit" name="create" value="ENVOYER">
                    </div>

        </form>
        </section>
        </div>


    </main>


<?php
include('../partials/footer.php')
?>

