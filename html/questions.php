<?php
require_once '../vendor/autoload.php';

use App\Repository\QuizRepository;
use App\Repository\QuestionRepository;
use App\Repository\AnswerRepository;


$isPage = "questions";

include('../partials/header.php');

$idQuiz = intval($_GET['id']);

$quiz = new QuizRepository();
$question = new QuestionRepository();
$answer = new AnswerRepository();

$theQuiz = $quiz->findById($idQuiz);
$questions = $question->findByQuizId($idQuiz);
shuffle($questions);
$selectedQuestions = array_slice($questions, 0, 10);

$score = 0;
$currentQuestionIndex = 0;

    $post = $_POST;

$currentQuestionIndex++;


?>
<div class="main">
    <div class="image">
        <img src="../assets/images/kaamelott.png">
    </div>

    <form action="../html/questions.php" method="post" class="responces">
        <?php

        if ($currentQuestionIndex < count($selectedQuestions)) {

            // Récupère la question en cours
            $currentQuestion = $selectedQuestions[$currentQuestionIndex];

            // Récupère les réponses pour cette question
            $answers = $answer->findByQuestionId($currentQuestion->id);

            // Affiche la question et les réponses à l'utilisateur
            if (isset($_POST['question-' . $currentQuestion->id]) && $selectedAnswer->is_true && $_POST['question-' . $currentQuestion->id] == $selectedAnswer->id) {
                $idAnswerPost =  intval($_POST['question-6_']);
                $selectedAnswer = $answer->findById($idAnswerPost);
                $score++;
            }
      ?>
            <h1><?= $currentQuestion->question ?></h1>
            <?php
            foreach ($answers as $answer) {
            ?>
                <input type="radio" name="question-<?= $currentQuestion->id?> " value="<?=$answer->id?> "> <?= $answer->answer ?>
            <?php
            }
            ?>
            <input type="submit" value="Question suivante">
        <?php


            // Passe à la question suivante
            $currentQuestionIndex++;
        } else {



            // Toutes les questions ont été affichées, affiche le score final
            echo '<div Class="results">';
            echo '<h2>Résultats</h2>';
            echo '<p>Tu as obtenu un score de ' . $score . ' / ' . count($questions) . '.</p>';
            echo '</div>';
        }


        ?>

    </form>













    <div class="progress">


        <?php
        $steps = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        foreach ($steps as $step) {
            $isResponced = false;
            $isCorrect = false;
            if ($isResponced == false) { ?>
                <img src="../assets/images/pattounes grise.png">
            <?php
            } elseif ($isResponced == true && $isCorrect == true) { ?>
                <img src="../assets/images/pattounes verte.png">
            <?php
            } elseif ($isResponced == true && $isCorrect == false) { ?>
                <img src="../assets/images/pattounes rouge.png">
        <?php
            }
        }
        ?>

    </div>

</div>
<?php
include('../partials/footer.php')
?>