<?php
$isPage="DatabaseTheme";
include('../partials/header.php');
require_once '../vendor/autoload.php';

use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\ThemeRepository;

include('./mesFonctionsTable.php');



$newQuestionTableHeader = new QuestionRepository();
$rowsQuestion = $newQuestionTableHeader->findAllLimit();



?>
<div class="body">
    <div class="container">

        <h1>Mes Questions</h1>

        <a class="btn" href="CreerFormulaire.php" role="button">Create</a>
        <br>
        <table>
            <?php
            displayTableQuestion($rowsQuestion , getHeaderTableQuestion());?>
        </table>

    </div>

</div>















<?php
include('../partials/footer.php');
?>

