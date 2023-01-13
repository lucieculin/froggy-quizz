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
}elseif ($isPage === "identityUser") {
    echo "<link rel='stylesheet' href='../styles/Identity_user.css'>";
}elseif ($isPage === "login") {
    echo "<link rel='stylesheet' href='../styles/login.css'>";
}elseif ($isPage === "createQuiz") {
    echo "<link rel='stylesheet' href='../styles/createQuiz.css'>";
}elseif ($isPage === "questions") {
    echo "<link rel='stylesheet' href='../styles/questions.css'>";
} else {
?> <script>
        console.log("echec css")
    </script> <?php
            };

                ?>