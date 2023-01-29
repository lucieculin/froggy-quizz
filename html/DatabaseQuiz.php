<?php
$isPage="DatabaseQuiz";
include('../partials/header.php');
require_once '../vendor/autoload.php';

use App\Class\Quiz;
use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\ThemeRepository;

include('./mesFonctionsTable.php');




//j'affiche les éléments de ma database dans un tableau
$newQuizTableHeader = new QuizRepository();
$rowsQuiz = $newQuizTableHeader->findAllLimit();


$count = COUNT($rowsQuiz);
// je compte mes pages pour ma pagination




?>
<div class="body">
    <div class="container">

        <h1>Mes Quiz</h1>
<?php var_dump($count)
?>
        <a class="btn" href="CreerFormulaire.php" role="button">Create</a>
        <br>
        <table>
            <?php
            displayTableQuiz($rowsQuiz , getHeaderTableQuiz());?>
        </table>

    </div>




</div>















<?php
include('../partials/footer.php');
?>

