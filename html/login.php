<?php

error_reporting(E_ERROR | E_NOTICE | E_PARSE);
session_start();
use App\Repository\UserRepository;
use App\Class\User;

require_once '../vendor/autoload.php';
$isPage = "login";
include('../partials/header.php');



$userRepository = new UserRepository();

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $userRepository->findByUserName($username);

    dump($user);
    echo($username);
    echo($password);
    if ($user !== null && $user !== $username && password_verify($password, $user->getPassword())) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit;
    }

    $error = 'Nom d\'utilisateur ou mot de passe incorrect';
}

?>

    <div class="main">
    <div class="card-glassmorphism">
        <div class="card-content">
            <h1>Connexion</h1>
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Frog ID:</label>
                    <input type="text" id="username" name="username" class="form-input-glassmorphism">
                </div>
                <div class="form-group">
                    <label for="password">Froggy Pass:</label>
                    <input type="password" id="password" name="password" class="form-input-glassmorphism">

                </div>
                <button type="submit" class="form-submit-glassmorphism">Connexion</button><br><br><br>
                <a class="form-create-glassmorphism" href="register.php" style="color: #2b88e7;">Créer un compte</a>
            </form>
        </div>
    </div>
</div>
<?php include('../partials/footer.php'); ?>