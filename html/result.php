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

foreach ($results as $result) {
    $currentAnswer = $answer->findById($result);
    $allAnswer[] = $currentAnswer;
}

foreach ($allAnswer as $currentAnswer) {
    $currentQuestion = $question->findById($currentAnswer->question_id);
    
    if ($currentAnswer->is_true) {
        // echo $currentQuestion->question . "<br>";
        // echo "La reponse est bonne <br>";
        $score++;
    } else {
        // echo $currentQuestion->question . "<br>";
        // echo "la réponse est mauvaise <br>";
    }
}
?>


<div class="main">
    <?php 
    if($score<4){
echo "gros naze ! ";
    }elseif($score>=4 && $score<8){
echo "pas maaal";
    }elseif($score>=8){
echo "geniuuus";
    }else{
        echo "wtf";
    }
    ?>
<h1>Votre Score est de <?=$score?>/10</h1>
 
<div class="container-results">
<?php
foreach  ($allAnswer as $currentAnswer) {
 
?>
    <div class="card-result">
    <h2>Question n°<?=$nbr?></h2>

    </div>
<?php
$nbr++;
}
?>
</div>





</div>
<?php
include('../partials/footer.php')
?>