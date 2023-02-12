<?php
$isPage="createAnswer";
require_once '../vendor/autoload.php';



use App\Repository\QuestionRepository;
use App\Repository\AnswerRepository;


include('../partials/header.php');
$bdd= new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password:null);

if($bdd){
    echo "Connection successfull";
}else{
    die(mysqli_connect_error($bdd));
}


$newQuestion = new QuestionRepository();
$displayQuestion = $newQuestion->findAll();



$getQuestion = $_GET['question'];
$newAnswer1 = "Réponse 1";
$newAnswer2 = "Réponse 2";
$newAnswer3 = "Réponse 3";
$newAnswer4 = "Réponse 4";

foreach ($displayQuestion as $question){
    if ($question->getQuestion() === $getQuestion){
        $result = $question->getId();
    }
}


?>


<div class="bodyCreate">

<?php var_dump($result); ?>
    <h1>Indiquer les réponses à la question : "<?php echo $getQuestion; ?>"</h1>

    <form method="get">

        <input type="text" name="newAnswer1" id="newAnswer1" placeholder="Réponse 1"/>
        <input type="radio" name="newAnswer1Bool0" id="newAnswer1Bool0">
        <label for="newAnswer1Bool0">Faux</label>
        <input type="radio" name="newAnswer1Bool1" id="newAnswer1Bool1">
        <label for="newAnswer1Bool1">Vrai</label>



        <input type="text" name="newAnswer2" id="newAnswer2" placeholder="Réponse 2"/>
        <input type="radio" name="newAnswer2Bool0" id="newAnswer2Bool0">
        <label for="newAnswer2Bool0">Faux</label>
        <input type="radio" name="newAnswer2Bool1" id="newAnswer2Bool1">
        <label for="newAnswer2Bool1">Vrai</label>

        <input type="text" name="newAnswer3" id="newAnswer3" placeholder="Réponse 3"/>
        <input type="radio" name="newAnswer3Bool0" id="newAnswer3Bool0">
        <label for="newAnswer3Bool0">Faux</label>
        <input type="radio" name="newAnswer3Bool1" id="newAnswer3Bool1">
        <label for="newAnswer3Bool1">Vrai</label>

        <input type="text" name="newAnswer4" id="newAnswer4" placeholder="Réponse 4"/>
        <input type="radio" name="newAnswer4Bool0" id="newAnswer4Bool0">
        <label for="newAnswer4Bool0">Faux</label>
        <input type="radio" name="newAnswer4Bool1" id="newAnswer4Bool1">
        <label for="newAnswer4Bool1">Vrai</label>


        <input type="submit" name="soumettre" value="soumettre">

        <?php var_dump($_GET) ?>
        <?php if((!empty($_GET['soumettre'])) && (!empty($_GET['newAnswer1'])) && (!empty($_GET['newAnswer2'])) && (!empty($_GET['newAnswer3'])) &&(!empty($_GET['newAnswer4'])) && ($_GET['newAnswer1Bool0']== "on" XOR $_GET['newAnswer1Bool1']== "on") && ($_GET['newAnswer2Bool0']== "on" XOR $_GET['newAnswer2Bool1']== "on") && ($_GET['newAnswer3Bool0']== "on" XOR $_GET['newAnswer3Bool1']== "on") && ($_GET['newAnswer4Bool0']== "on" XOR $_GET['newAnswer4Bool1']== "on")) {

            $newAnswer1 = $_GET['newAnswer1'];
            $newAnswer2 = $_GET['newAnswer2'];
            $newAnswer3 = $_GET['newAnswer3'];
            $newAnswer4 = $_GET['newAnswer4'];
            $is_true1 = 1;
            $is_true2 = 1;
            $is_true3 = 1;
            $is_true4 = 1;

            if($_GET['newAnswer1Bool0'] == "on"){
                $is_true1 = 0;
            }
            if($_GET['newAnswer2Bool0'] == "on"){
                $is_true2 = 0;
            }
            if($_GET['newAnswer3Bool0'] == "on"){
                $is_true3 = 0;
            }
            if($_GET['newAnswer4Bool0'] == "on"){
                $is_true1 = 0;
            }

            $addAnswer = $bdd->query('INSERT INTO answer (answer.answer, answer.question_id, answer.is_true) VALUES( $newAnswer1, $result, $is_true1 ),( $newAnswer2, $result, $is_true2 ),( $newAnswer3, $result, $is_true3 ), ( $newAnswer4, $result, $is_true4 ); ');

            if($addAnswer){
                echo "Données importées avec succes";?>
                <button><a href="formulaireIndex.php">Passer Au Quiz</a></button>
            <?php }else{
                die(mysqli_connect_error($bdd));
            }
        }?>



    </form>













</div>
