<?php
$isPage = "questions";
include_once('../App/repository/QuizRepository.php');
include_once('../App/repository/QuestionsRepository.php');
include_once('../App/class/questions.php');
include_once('../App/repository/AnswerRepository.php');
include('../partials/header.php');

$idQuiz = intval($_GET['id']);

$quiz = new QuizRepository();
$question = new QuestionRepository();
$answer = new AnswerRepository();

$theQuiz = $quiz->findById($idQuiz);
$questions = $question->findByQuizId($idQuiz);
shuffle($questions);
$selectedQuestions = array_slice($questions, 0, 10);
for($i=0 ; $i<10 ; $i++){
  $answers[$i] = $answer->findByQuestionId($selectedQuestions[$i]->id);
}
?><pre><?php


?></pre><?php
?>

<div class="margin-container">


  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[0]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[0] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[1]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[1] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[2]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[2] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[3]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[3] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[4]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[4] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[5]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[5] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[6]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[6] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[7]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[7] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[8]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[8] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[9]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[9] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>

  <div class="question-container">
    <div class="question">
        <h2><?=$selectedQuestions[10]->question?></h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
      <?php 
      foreach( $answers[10] as $answer){
        echo "<div class='reponse reponse1'>".$answer->answer."</div>";
      }
      ?>
    </div>
  </div>
  
