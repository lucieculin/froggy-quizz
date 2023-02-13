<?php
use App\Repository\UserRepository;
use App\Class\User;

error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "login";
include('../partials/header.php');

$userRepository = new UserRepository();
$data = new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password: '');

if (isset($_SESSION["user"])) {
    header("Location: mon_compte.php");
    exit;
}

if (isset($_POST["submit"]) && !empty($_POST["userName"]) && !empty($_POST["password"])) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    $query = $data->query("SELECT * FROM users WHERE username = '$userName'");
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION["user"] = [
            "userName" => $userName,
            "email" => $user["email"],
            "role" => ["ROLE_USER"]
        ];

        header("Location: mon_compte.php");
        exit;
    } else {
        $error = "Le nom d'utilisateur ou le mot de passe est incorrect";
    }
}

?>

    <main>
        <section class="contact">
            <form class="contact-form" method="POST">
                <h2>Connexion</h2>

                <div class="userName">
                    <label for="userName">Pseudo Frog:</label>
                    <input type="text" id="userName" name="userName" placeholder="Saisissez votre pseudo...">
                </div>

                <div class="password">
                    <label for="password">Froggy Pass:</label>
                    <input type="password" id="password" name="password" placeholder="Saisissez votre mot de passe...">
                </div>

                <div class="submit">
                    <input type="submit" name="submit" value="SE CONNECTER">
                </div>

                <?php if (isset($error)) : ?>
                    <p><?= $error ?></p>
                <?php endif; ?>
            </form>
            <a href="register.php">
                <button>Créer un compte</button>
            </a>
        </section>
    </main>

<?php include('../partials/footer.php'); ?>