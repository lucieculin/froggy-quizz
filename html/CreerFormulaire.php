<?php
$isPage="CreerFormulaire";
require_once '../vendor/autoload.php';

use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\ThemeRepository;

include('../partials/header.php');

$newTheme = new ThemeRepository();



$newQuiz = new QuestionRepository();


$newQuestion = new QuestionRepository();


$newAnswer = new AnswerRepository();

$theme = "";
$quiz = "";
$question = "";
$answer1 = "";
$answer2 = "";
$answer3 = "";
$answer4 = "";

$errorMessage ="";
$successMessage = "";

// S les données ont été transmises en utilisant la methode POST alors nous pouvons initialiser ces variables avec les données du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $theme = $_POST['theme'];
    $quiz = $_POST['quiz'];
    $question = $_POST['question'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];;
    $answer4 = $_POST['answer4'];

    do {
        if ( empty($theme) || empty($quiz) || empty($question) || empty($answer1) || empty($answer2) || empty($answer3) || empty($answer4)) {
            $errorMessage = "le Formulaire n'est pas complet";
            break;
        }

        // ajouter les nouvelles données
        $theme = "";
        $quiz = "";
        $question = "";
        $answer1 = "";
        $answer2 = "";
        $answer3 = "";
        $answer4 = "";

        $successMessage = "Les données sont ajoutées";
    } while (false);
}

?>


<div class="bodyCreate">

<h1>FORMULAIRE DE CREATION</h1>

<?php
if (!empty($errorMessage)){
    echo "<div>
    <button><strong>$errorMessage</strong></button>
</div>";
}

?>


<form method="post" action="">

    <div class="new">
        <h2>Créer un nouveau thème</h2>
        <label for="theme">Entrer un nouveau thème :</label>
             <input type="text" name="theme" id="theme" value="<?= $theme; ?>"></br>
            <form method="post" action="creation.php" enctype="multiârt/form-data">
                <input type="file" name="fichier">
            </form>
    </div>

    <div class="new">
        <h2>Créer un nouveau Quiz</h2>
        <label for="quiz">Entrer un nouveau Quiz :</label>
            <input type="text" name="quiz" id="quiz" value="<?= $quiz; ?>"></br>
            <form method="post" action="creation.php" enctype="multiârt/form-data">
                <input type="file" name="fichier">
            </form>
    </div>

    <div class="new">
        <h2>Créer une nouvelle question</h2>
        <label for="question">Entrer une nouvelle question :</label>
        <input type="text" name="question" id="question" vallue="<?= $question; ?>"></br>
             <form method="post" action="creation.php" enctype="multiârt/form-data">
                <input type="file" name="fichier">
            </form>
    </div>



    <div class="newAnswer">
        <h2>Créer vos réponses</h2>

        <div>
            <label for="answer1">Entrer la première réponse : </label>
            <input type="text" name="answer1" id="answer1" value="<?= $answer1; ?>">
            <input type="radio" name ="answer1" id="answer1" value="True">
            <label for="answer1">True</label>
            <input type="radio" name ="answer1" id="answer1" value="False">
            <label for="answer1">False</label>
        </div>

        <div>
            <label for="answer2">Entrer la seconde réponse : </label>
            <input type="text" name="answer2" id="answer2" value="<?= $answer2; ?>">
            <input type="radio" name ="answer2" id="answer2" value="True">
            <label for="answer2">True</label>
            <input type="radio" name ="answer2" id="answer2" value="False">
            <label for="answer2">False</label>
        </div>

        <div>
            <label for="answer3">Entrer la troisième réponse : </label>
            <input type="text" name="answer3" id="answer3" value="<?= $answer3; ?>">
            <input type="radio" name ="answer3" id="answer3" value="True">
            <label for="answer3">True</label>
            <input type="radio" name ="answer3" id="answer3" value="False">
            <label for="answer3">False</label>
        </div>

        <div>
            <label for="answer4">Entrer la quatrième réponse : </label>
            <input type="text" name="answer4" id="answer4" value="<?= $answer4; ?>">
            <input type="radio" name ="answer4" id="answer4" value="True">
            <label for="answer4">True</label>
            <input type="radio" name ="answer4" id="answer4" value="False">
            <label for="answer4">False</label>
        </div>
    </div>

    <?php
    if (!empty($successMessage)){
        echo "<div>
    <button><strong>$successMessage</strong></button>
</div>";
    }

    ?>

    <div class="submit">

        <input type="submit" value="Envoyer en Base de données">

        <a class="btn" href="./AdminQuiz.php" role="button">Annuler</a>

    </div>


</form>


</div>

//  je créé un formulaire
// je choisi un theme ou nouveau theme
// si nouveau theme j'affiche un formulaire complet avec :
    //création theme
    //création quiz
    //création 10 questions
    //création 4 réponses/ question (True/False)
// Si je choisi un theme existant je passe a la fonction ci-dessous



// Je choisi un theme existant
// je choisi quiz ou nouveau quiz
// si nouveau Quiz j'affiche formulaire avec :
    // création quiz
    // création 10 questions
    // création 4 réponses / question (true/false)
// je choisi un quiz existant je passe à la fonction ci-dessous


//Je choisi un quiz existant
// je créé un question
// je créé 4 réponses (true/false)




















<?php
include('../partials/footer.php');
?>
