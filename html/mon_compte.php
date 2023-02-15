<?php
error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "mon_compte";
include('../partials/header.php');
$user = $_SESSION["USER"];
if(!empty($user)){
    $userName= $user["userName"] ;
    $userMail= $user["email"];
}else{
    $userName = "user 1";
    $userMail ="user@lamda.com";
}
?>

<div class="main">

    <div class="container-card">

        <div class="card">


            <h1>Froggy Card de <?=$userName?></h1>

            <p>PseudoFrog : <?= $userName?></p>
            <p>Email : <?= $userMail?></p>
        </div>
    </div>
</div>


<?php
include('../partials/footer.php')
?>
