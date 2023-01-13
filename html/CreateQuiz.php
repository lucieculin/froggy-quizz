<?php
$isPage="createQuiz";
include('../partials/header.php');

include_once('../App/repository/QuizRepository.php');
include_once('../App/repository/QuestionsRepository.php');
include_once('../App/repository/AnswerRepository.php');
include_once('../App/repository/ThemeRepository.php');
include_once('../App/class/themes.php');

$themes = new ThemeRepository();
$displayThemes = $themes->findAll();
$newTheme = "Ajouter un theme";


?>
<div class="create-quiz">
 <h1>GESTION DES QUIZ</h1>
    <button class="" type="submit">Create Quiz</button>
    <button class="" type="submit">Delete Quiz</button>
    <button class="" type="submit">Modify Quiz</button>
<div>
    <form class="">
        <div class="">
            <label for="choixtheme" class="">Themes</label>
            <select class="" id="choixtheme" required>

                <?php
                foreach ( $displayThemes as $theme) { ?>
                    <option>
                        <?= $theme->name ?> </option>
                       <?php } ?>

                    <option><?= $newTheme ?></option>
            </select>

        <div class="">
            <button class="" type="submit">Submit</button>
        </div>
    </form>

</div>
</div>

