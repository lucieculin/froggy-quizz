<?php

if ($isPage === "home") {
    echo "<link rel='stylesheet' href='../styles/accueil.css'>";
} elseif ($isPage === "avatar") {
    echo "<link rel='stylesheet' href='../styles/avatar.css'>";
} elseif ($isPage === "boutique") {
    echo "<link rel='stylesheet' href='../styles/boutique.css'>";
} elseif ($isPage === "game-mode") {
    echo "<link rel='stylesheet' href='../styles/Choix_du_mode_jeux.css'>";
} elseif ($isPage === "versus") {
    echo "<link rel='stylesheet' href='../styles/style_demarrer_le-jeu.css'>";
} elseif ($isPage === "startGame") {
    echo "<link rel='stylesheet' href='../styles/style_demarrer_le-jeu.css'>";
} elseif ($isPage === "identityUser") {
    echo "<link rel='stylesheet' href='../styles/Identity_login.css'>";
} elseif ($isPage === "login") {
    echo "<link rel='stylesheet' href='../styles/login.css'>";
} elseif ($isPage === "register"){
    echo "<link rel='stylesheet' href='../styles/register.css'>";
}elseif ($isPage === "AdminQuiz") {
    echo "<link rel='stylesheet' href='../../styles/AdminQuiz.css'>";
} elseif ($isPage === "UpdateQuiz") {
    echo "<link rel='stylesheet' href='../styles/UpdateQuiz.css'>";
} elseif ($isPage === "CreerFormulaire") {
    echo "<link rel='stylesheet' href='../styles/CreerFormulaire.css'>";
} elseif ($isPage === "DatabaseTheme" || $isPage === "DatabaseQuiz" || $isPage === "DatabaseQuestion" || $isPage === "DatabaseAnswer") {
    echo "<link rel='stylesheet' href='../styles/Database.css'>";
} elseif ($isPage === "EditTheme" || $isPage === "EditQuiz" || $isPage === "EditQuestion" || $isPage === "EditAnswers") {
    echo "<link rel='stylesheet' href='../styles/EditTheme.css'>";
} elseif ($isPage === "questions") {
    echo "<link rel='stylesheet' href='../styles/questions.css'>";
} else {
?> <script>
        console.log("echec css")
    </script> <?php
            };

                ?>