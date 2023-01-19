<?php
$isPage="UpdateQuiz";

require_once '../vendor/autoload.php';
use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\ThemeRepository;

include('../partials/header.php');

$themes = new ThemeRepository();
$displayThemes = $themes->findAll();

$quizs = new QuizRepository();
$displayQuizs = $quizs->findAll();

$questions = new QuestionRepository();
$displayQuestions = $questions->findAll();


?>

<div class="bodyUpdate">

    <div class="btnAdminQuiz">

        <form action="./AdminQuiz.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="Retour">GEREZ VOTRE BASE DE DONNEES</button>

        </form>

    </div>

    <h1>MODIFIER LA BASE DE DONNEES</h1>

    <h2>Que soutaitez-vous modifier : </h2>

    <span>*Vous pouvez modifier les photos des classes Themes, Quiz et Questions en selectionnant le libéllé correspondant</span>

    <div class="radioUpdate">

        <input type="radio" id="theme" name="theme" value="theme" formmethod="post">
        <label for="theme">Themes</label>

        <input type="radio" id="quiz" name="quiz" value="quiz">
        <label for="quiz">Quiz</label>

        <input type="radio" id="question" name="question" value="question" formmethod="post">
        <label for="question">Questions</label>

        <input type="radio" id="answers" name="answers" value="answers" formmethod="post">
        <label for="answers">Réponses</label>

    </div>

    <div class="themeUpdate">
                <label>Quel theme voulez-vous modifier :</label>
        <div class="SelectTheme">
                <select  name="nameTheme1" required>
                    <?php foreach ($displayThemes as $theme) { ?>
                    <option><?=$theme->name ?></option>
                    <?php } ?>
                </select>

                <form method="post">
                    <input type="text" name="nameTheme2" placeholder="modifier le theme"/>
                </form>
        </div>
        <div class="btnModifier">
                <button type="submit">Modifier</button>
        </div>
    </div>

    <div class="themeUpdate">
        <label>Quel Quiz voulez-vous modifier :</label>
        <div class="SelectTheme">
            <select  name="nameQuiz1" required>
                <?php foreach ($displayQuizs as $quiz) { ?>
                    <option><?=$quiz->name ?></option>
                <?php } ?>
            </select>

            <form method="post">
                <input type="text" name="nameQuiz2" placeholder="modifier le Quiz"/>
            </form>
        </div>
        <div class="btnModifier">
            <button type="submit">Modifier</button>
        </div>
    </div>







</div>


<?php
include('../partials/footer.php');
?>

