<?php
error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "mon_compte";
include('../partials/header.php');
?>

<div class="main">

    <div class="container-card">

        <div class="card">


            <h1>Froggy Card de <?= $_SESSION["user"]["userName"] ?></h1>

            <p>PseudoFrog : <?= $_SESSION["user"]["userName"] ?></p>
            <p>Email : <?= $_SESSION["user"]["email"] ?></p>

        </div>
    </div>
</div>


<?php
include('../partials/footer.php')
?>
