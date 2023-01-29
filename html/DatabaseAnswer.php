<?php
$isPage="DatabaseTheme";
include('../partials/header.php');
require_once '../vendor/autoload.php';

use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\ThemeRepository;

include('./mesFonctionsTable.php');



$newAnswerTableHeader = new AnswerRepository();
$rowsAnswer = $newAnswerTableHeader->findAllLimit();

?>
<div class="body">
    <div class="container">

        <h1>Mes Réponses</h1>

        <a class="btn" href="CreerFormulaire.php" role="button">Create</a>
        <br>
        <table>
            <?php
            displayTableAnswer($rowsAnswer , getHeaderTableAnswer());?>
        </table>

    </div>

</div>















<?php
include('../partials/footer.php');
?>

