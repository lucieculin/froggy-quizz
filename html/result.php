<?php

$isPage = "result";

include('../partials/header.php');

use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;

require_once '../vendor/autoload.php';

$results = $_POST;
$answer = new AnswerRepository();
$question = new QuestionRepository();
$score = 0;
$nbr = 1;
$points = 0;
$idQuizz = $_POST["id"];

foreach ($results as $result) {
    $currentAnswer = $answer->findById($result);
    $allAnswer[] = $currentAnswer;
}

foreach ($allAnswer as $currentAnswer) {
    $currentQuestion = $question->findById($currentAnswer->question_id);

    if ($currentAnswer->is_true) {
        $score++;
    } else {
    }
}
//Defini la phrase de conclusion en fonction des resultats
if ($score < 5 && $score >= 0) {
    $conclusion = "Vous n'avez pas la moyenne. Retentez votre chance.";
    $points = 0;
    $spanPoints = "Vous n'optenez aucun point.";
} elseif ($score >= 5 && $score < 9) {
    $conclusion = "Bravo vous avez la moyenne.";
    $points = 1;
    $spanPoints = "Vous obtenez 1 point.";
} elseif ($score >= 9) {
    $conclusion = "Félicitation! Vous avez une exellente note ";
    $points = 2;
    $spanPoints = "Vous obtenez 2 points.";
} else {
    $conclusion = "";
}
?>
é
<?php
include('../partials/footer.php')
?>