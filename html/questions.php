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
    <div class="question-container" id="starter">
      <h2><?=$theQuiz->name?></h2>
      <div class="btn-suivant" id="start">Commencez le quiz</div>
    </div>
    <?php
    // Boucle pour afficher les 10 questions sélectionnées
    for ($i = 0; $i < 10; $i++) {
    ?>

        <div class="question-container" id="qc<?= $i ?>">
          <div class="question">
            <h2><?= $selectedQuestions[$i]->question ?></h2>
          </div>
          <div class="question-image">
            <div class="photo">ici mon image</div>
          </div>
          <div class="reponse-container">

            <?php
            // Boucle pour afficher les réponses pour chaque question
            foreach ($answers[$i] as $answer) { ?>
              <label>
                <input type="radio" name="quiz<?php echo $i; ?>" value="<?php echo $answer->id; ?>">
                <span class="reponse"><?= $answer->answer ?></span>
              </label>
            <?php } ?>
          </div>

          <div class="btn-suivant" id="btn-suivant<?= $i ?>">Question suivante</div>
        </div>
        <?php
        //TODO à corriger
        if(1==1) {
          $currentQuestionIndex++;
          // Passe à la question suivante
        }
            
            
        else {



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