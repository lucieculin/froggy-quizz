<?php

// Configuration d'affichage des erreurs
error_reporting(E_ERROR | E_NOTICE | E_PARSE);

// Démarrage de la session
session_start();

// Import des classes et fonctions nécessaires
use App\Repository\UserRepository;
use App\Class\User;

// Inclusion du header de la page
require_once '../vendor/autoload.php';
$isPage = "login";
include('../partials/header.php');

// Instanciation de la classe UserRepository
$userRepository = new UserRepository();

// Si le formulaire est soumis
if (!empty($_POST)) {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Recherche de l'utilisateur dans la base de données
    $user = $userRepository->findByUserName($username);

    // Affichage pour débogage
    dump($user);
    echo($username);
    echo($password);

    // Vérification des informations d'authentification
    if ($user !== null && $user !== $username && password_verify($password, $user->getPassword())) {
        // Authentification réussie, sauvegarde de l'utilisateur dans la session
        $_SESSION['user'] = $user;
        // Redirection vers la page du compte de l'utilisateur
        header('Location: mon_compte.php');
        exit;
    }

    // Authentification échouée, affichage d'un message d'erreur
    $error = 'Nom d\'utilisateur ou mot de passe incorrect';
}

?>

    <!-- Affichage du formulaire de connexion -->
    <div class="main">
        <div class="card-glassmorphism">
            <div class="card-content">
                <h1>Connexion</h1>
                <?php if (isset($error)): ?>
                    <p style="color: #b41a1a;"><?php echo $error; ?></p>
                <?php endif; ?>
                <form  method="post" action="login.php">
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

    <!-- Inclusion du footer de la page -->
<?php include('../partials/footer.php'); ?>