<?php
error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "Mon Compte";
include('../partials/header.php');
?>
<h1>Profil de <?= $_SESSION["user"]["userName"] ?></h1>

<p>PseudoFrog : <?= $_SESSION["user"]["userName"] ?></p>
<p>Email : <?= $_SESSION["user"]["email"] ?></p>





<?php
include('../partials/footer.php')
?>
