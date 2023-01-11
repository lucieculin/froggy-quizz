<?php
$isPage = "questions";
include_once('../App/repository/QuizRepository.php');
include_once('../App/repository/QuestionsRepository.php');
include_once('../App/class/questions.php');
include_once('../App/repository/AnswerRepository.php');
include('../partials/header.php');

?>

<div class="margin-container">
  <div class="question-container">
    <div class="question">
        <h2>Ici ma question</h2>
    </div>
    <div class="question-image">
        <div class="photo">ici mon image</div>
    </div>
    <div class="reponse-container">
        <div class="reponse reponse1">reponse1</div>
        <div class="reponse reponse2">reponse2</div>
        <div class="reponse reponse3">reponse3</div>
        <div class="reponse reponse4">reponse4</div>
    </div>
  </div>
</div>
