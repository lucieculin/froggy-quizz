<?php

// Configuration d'affichage des erreurs
error_reporting(E_ERROR | E_NOTICE | E_PARSE);

// Démarrage de la session
session_start();

// Import des classes et fonctions nécessaires

use App\Entity\User;


// Inclusion du header de la page
require_once '../vendor/autoload.php';
$isPage = "mon_compte";
include('../partials/header.php');

// Récupération des données utilisateur stockées en session
$userData = isset($_SESSION['user']) ? $_SESSION['user'] : null;

// Vérification que les données sont valides et de type string
if (is_string($userData)) {
    // Tentative de désérialisation de l'objet utilisateur
    $user = unserialize($userData, ['allowed_classes' => [Users::class]]);
} else {
    // Les données utilisateur stockées en session sont invalides ou nulles
    $user = null;
}

// Vérification que l'utilisateur est authentifié
if ($user === null) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié
    header('Location: login.php');
    exit;
}

?>

    <!-- Affichage de la page utilisateur -->
    <div class="main">
        <div class="card-glassmorphism">
            <div class="card-content">
                <h1>Bonjour, <?php echo $user->getFirstName(); ?> <?php echo $user->getLastName(); ?></h1>
                <p>Votre adresse email est : <?php echo $user->getEmail(); ?></p>
                <a href="logout.php">Se déconnecter</a>
            </div>
        </div>
    </div>

    <!-- Inclusion du footer de la page -->
<?php include('../partials/footer.php'); ?>