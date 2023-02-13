<?php
$isPage="createTheme";
require_once '../vendor/autoload.php';


use App\Repository\ThemeRepository;
use App\Repository\QuizRepository;

include('../partials/header.php');
$bdd= new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password:null);

if($bdd){
    echo "Connection successfull";
}else{
    die(mysqli_connect_error($bdd));
}


$newsQuiz = new QuizRepository();
$displayTheme = $newsQuiz->findAll();

$newsQuiz = "nouveau Quiz";


?>
<div class="bodyCreate">

    <h1>Quel est le nom de votre nouveau Quiz</h1>

    <form method="GET" action="">

        <label for="quiz"  >Entrer un nouveau Quiz :</label>

        <input type="text" name="quiz" id="quiz" value=""/>

        <input type="hidden" name="idTheme" value=""/>

        <input type="submit" name="soumettre" value="soumettre"/>

        <?php if((isset($_GET['soumettre'])) && (isset($_GET['quiz']) )){


            $quiz = $_GET['quiz'];

            $newTheme = new ThemeRepository();
            $idTheme = $newTheme->findIdByName('Culture');

            echo $idTheme;

            $addQuiz = $bdd->query("INSERT INTO quiz (quiz.name, quiz.theme_id) VALUES ('$quiz', '$idTheme');");

            if($addQuiz){
                echo "Données importées avec succes";?>
                <button><a href="formulaireIndex.php">Passer Au Quiz</a></button>
            <?php }else{
                die(mysqli_connect_error($bdd));
            }
        }?>




    </form>

</div>