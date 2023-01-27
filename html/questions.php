<?php

require_once '../vendor/autoload.php';

use App\Repository\QuizRepository;
use App\Repository\QuestionRepository;
use App\Repository\AnswerRepository;


$isPage = "questions";

include('../partials/header.php');

// Récupération de l'id du quiz à partir de l'URL
$idQuiz = intval($_GET['id']);

//instanciation des repository
$quiz = new QuizRepository();
$question = new QuestionRepository();
$answer = new AnswerRepository();

// Récupération du quiz en fonction de l'id
$theQuiz = $quiz->findById($idQuiz);

// Récupération des questions pour le quiz
$questions = $question->findByQuizId($idQuiz);

// Mélange des questions
shuffle($questions);

// Sélection des 10 premières questions
$selectedQuestions = array_slice($questions, 0, 10);

// Récupération des réponses pour les questions sélectionnées
for ($i = 0; $i < 10; $i++) {
  $answers[$i] = $answer->findByQuestionId($selectedQuestions[$i]->id);
}
?>

<div class="main">
  <div class="margin-container">
    <form action="../html/result.php" method="post">
    
      <?php
      // Boucle pour afficher les 10 questions sélectionnées
      for ($i = 0; $i < 10; $i++) {
      ?>

        <div class="question-container" id="qc<?= $i ?>" >
          <div class="question-image">
            <img class="img-question-image" src="../assets/images/Quiz/<?=$selectedQuestions[$i]->id?>.png" alt="Photo de <?=$theQuiz->name?> ">
          </div>
          <div class="question">
            <h2><?= $selectedQuestions[$i]->question ?></h2>
          </div>
          <div class="reponse-container">

            <?php
            // Boucle pour afficher les réponses pour chaque question
            foreach ($answers[$i] as $answer) { ?>
              <label>
                <input type="radio" name="quiz<?php echo $i; ?>" value="<?php echo $answer->id; ?>" class="input-hidden">
                <span class="reponse"><?= $answer->answer ?></span>
              </label>
            <?php } ?>
          </div>

        </div>
        
      <?php
      }

      ?>
        <div class="question-container" id="starter">
        <h2><?= $theQuiz->name ?></h2>
        <div class="btn-suivant" id="start" >Commencez le quiz</div>
      </div>
      <input type="submit" value="validez">
    </form>



  </div>
</div>


</div>
<?php
include('../partials/footer.php')
?>