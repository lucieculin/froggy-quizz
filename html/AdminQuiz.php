<?php
$isPage="AdminQuiz";
include('../partials/header.php');

?>

<div class="containerAdminQuiz">
    <h1 class="h1AdminQuiz">GEREZ VOTRE BASE DE DONNEES</h1>

    <h2 class="h2AdminQuiz">Vous souhaitez :</h2>

    <div class="btnAdminQuiz">

        <form action="DatabaseTheme.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="create">VOIR LES THEMES</button>

        </form>

        <form action="DatabaseQuiz.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="create">VOIR LES QUIZ</button>

        </form>

        <form action="DatabaseQuestion.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="create">VOIR LES QUESTIONS</button>

        </form>

        <form action="DatabaseAnswer.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="create">VOIR LES REPONSES</button>

        </form>

        <form action="../../index.php" target="_blank">

            <button class="bAdminQuiz" type="submit" name="udpdate">RETOURNER SUR LA PAGE D'ACCUEIL</button>

        </form>



    </div>

</div>


<?php
include('../partials/footer.php');
?>
