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


$answers = new AnswerRepository();
$displayAnswers = $answers->findAll();


?>

<div class="bodyUpdate">

    <div class="btnAdminQuiz">

        <form action="./AdminQuiz.php" method="get" target="_blank">

            <button class="bAdminQuiz" type="submit" name="Retour">GEREZ VOTRE BASE DE DONNEES</button>

        </form>

    </div>

    <h1>MODIFIER LA BASE DE DONNEES</h1>



<div class="complete">
    <div class="themeUpdate">
                <label>Quel theme voulez-vous modifier :</label>
        <div class="SelectTheme">
            <form method="POST" >
                <select name="nameTheme1" required>
                    <?php foreach ($displayThemes as $theme) { ?>
                    <option><?=$theme->getName() ?></option>
                    <?php } ?>

                </select>

            </form>

                <form method="post">
                    <input type="text" name="nameTheme2" placeholder="modifier le theme"/>
                </form>



        </div>

        <form method="post" action="modifier_fichier.php" enctype="multiârt/form-data">
            <input type="file" name="fichier"> <br/>
            <input type="submit" name="upload" value="Envoyer"

        </form>

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

        <form method="post" action="modifier_fichier.php" enctype="multiârt/form-data">
            <input type="file" name="fichier"> <br/>
            <input type="submit" name="upload" value="Envoyer"

        </form>

        <div class="btnModifier">
            <button type="submit">Modifier</button>
        </div>
    </div>



    <div class="themeUpdate">
        <label>Quelle Question voulez-vous modifier :</label>
        <div class="SelectTheme">
            <select  name="nameQuestion1" required>
                <?php foreach ($displayQuestions as $question) { ?>
                    <option><?=$question->question ?></option>
                <?php } ?>
            </select>

            <form method="post">
                <input type="text" name="nameQuestion2" placeholder="modifier la question"/>
            </form>
        </div>

        <form method="post" action="modifier_fichier.php" enctype="multiârt/form-data">
            <input type="file" name="fichier"> <br/>
            <input type="submit" name="upload" value="Envoyer"

        </form>

        <div class="btnModifier">
            <button type="submit">Modifier</button>
        </div>
    </div>


    <div class="themeUpdate">
        <label>Quelle Réponse voulez-vous modifier :</label>
        <div class="SelectTheme">
            <select  name="nameAnswer1" required>
                <?php foreach ($displayAnswers as $answer) { ?>
                    <option><?=$answer->answer ?></option>
                <?php } ?>
            </select>

            <form method="post">
                <input type="text" name="nameAnswer2" placeholder="modifier le Quiz"/>
            </form>
        </div>
        <div class="btnModifier">
            <button type="submit">Modifier</button>
        </div>
    </div>


</div>
</div>

<?php
include('../partials/footer.php');
?>

