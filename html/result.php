<h1>ici vos resultats</h1>
<?php
include_once('../App/repository/AnswerRepository.php');
include_once('../App/repository/QuestionsRepository.php');

$results = $_POST;
$answer = new AnswerRepository();
$question = new QuestionRepository();
$score = 0;

foreach ($results as $result) {
    $currentAnswer = $answer->findById($result);
    $allAnswer[] = $currentAnswer;
}




foreach ($allAnswer as $currentAnswer) {
    $currentQuestion = $question->findById($currentAnswer->question_id);

    if ($currentAnswer->is_true) {
        echo $currentQuestion->question . "<br>";
        echo "La reponse est bonne <br>";
        $score++;
    } else {
        echo $currentQuestion->question . "<br>";
        echo "la réponse est mauvaise <br>";
    }
}
?>
<h2>Votre Score est de <?=$score?>/10</h2>