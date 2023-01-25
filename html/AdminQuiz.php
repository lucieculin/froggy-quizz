<?php
$isPage="AdminQuiz";
include('../partials/header.php');

?>

<div class="containerAdminQuiz">
    <h1 class="h1AdminQuiz">GEREZ VOTRE BASE DE DONNEES</h1>

    <h2 class="h2AdminQuiz">Vous souhaitez :</h2>

    <div class="btnAdminQuiz">

        <form action="./CreateQuiz.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="create">CREER DES DONNEES</button>

        </form>

        <form action="./UpdateQuiz.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="udpdate">MODIFFIER DES DONNEES</button>

        </form>

        <form action="./DeleteQuiz.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="delete">SUPPRIMER DES DONNEES</button>

        </form>


    </div>

</div>


<?php
include('../partials/footer.php');
?>
