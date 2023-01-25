<?php

if ($isPage === "home") {
    echo "<script src='../scripts/accueil.js' defer></script>";
}elseif($isPage === "questions"){
    echo "<script src='../scripts/questions.js' defer></script>";
}  else {
?> <script>
        console.log("echec script")
    </script> <?php
            };

                ?>