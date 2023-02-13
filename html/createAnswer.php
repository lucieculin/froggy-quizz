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


$idQuiz = $_GET['idQuiz'];
$getQuestion = $_GET['nameQuestion'];


foreach ($displayQuestion as $question){
    if ($question->getQuestion() === $getQuestion){
        $result = $question->getId();
    }
}
$idQuestion = intval($result);

?>


<div class="bodyCreate">


    <h1>Indiquer les réponses à la question : "<?php echo $getQuestion; ?>"</h1>

    <form method="get">

        <input type="text" name="newAnswer1" id="newAnswer1" placeholder="Réponse 1"/>
        <input type="radio" name="AnswerTrue1" id="AnswerTrue1">
        <label for="AnswerTrue1">Vrai</label>



        <input type="text" name="newAnswer2" id="newAnswer2" placeholder="Réponse 2"/>
        <input type="radio" name="AnswerTrue2" id="AnswerTrue2">
        <label for="AnswerTrue2">Vrai</label>

        <input type="text" name="newAnswer3" id="newAnswer3" placeholder="Réponse 3"/>
        <input type="radio" name="AnswerTrue3" id="AnswerTrue3">
        <label for="AnswerTrue3">Vrai</label>

        <input type="text" name="newAnswer4" id="newAnswer4" placeholder="Réponse 4"/>
        <input type="radio" name="AnswerTrue4" id="AnswerTrue4">
        <label for="AnswerTrue4">Vrai</label>

        <input type="hidden" name="idQuestion" value="<?php echo $idQuestion?>"/>


        <input type="submit" name="soumettre" value="soumettre">




    </form>
    <?php
    if((!empty($_GET['newAnswer1'])) && (!empty($_GET['newAnswer2'])) && (!empty($_GET['newAnswer3'])) && (!empty($_GET['newAnswer4'])) && (!empty($_GET['soumettre'])) && ((!empty($_GET['AnswerTrue1'])) || (!empty($_GET['AnswerTrue2'])) || (!empty($_GET['AnswerTrue3'])) || (!empty($_GET['AnswerTrue4'])))){
    $newAnswer1 = htmlentities($_GET['newAnswer1']);
    $newAnswer2 = htmlentities($_GET['newAnswer2']);
    $newAnswer3 = htmlentities($_GET['newAnswer3']);
    $newAnswer4 = htmlentities($_GET['newAnswer4']);
    $questionId = intval($_GET['idQuestion']);


    if($_GET['AnswerTrue1'] == "on"){
        $is_True1 = 1;
    }else{$is_True1 = 0;}
    if($_GET['AnswerTrue2'] == "on"){
        $is_True2 = 1;
    }else{$is_True2 = 0;}
    if($_GET['AnswerTrue3'] == "on"){
        $is_True3 = 1;
    }else{ $is_True3 = 0;}
    if($_GET['AnswerTrue4'] == "on"){
        $is_True4 = 1;
    }else{$is_True4 = 0;}


    var_dump($newAnswer1);
    var_dump($_GET);
    var_dump($_GET['idQuestion']);
    var_dump($questionId);
    var_dump($is_True1);
    var_dump($is_True2);
    var_dump($is_True3);
    var_dump($is_True4);

    $addAnswer = $bdd->query("INSERT INTO answer (answer, question_id, is_true) VALUES ('$newAnswer1', '$questionId', '$is_True1'), ('$newAnswer2', '$questionId', '$is_True2'), ('$newAnswer3', '$questionId', '$is_True3'), ('$newAnswer4', '$questionId', '$is_True4');");

        if($addAnswer){
            echo "Données importées avec succes";?>
            <button><a href="DatabaseAnswer.php">Les questions</a></button>
        <?php }else{
            die(mysqli_connect_error($bdd));
        }


    }elseif((!empty($_GET['soumettre'])) && ((empty($_GET['newAnswer1'])) || (empty($_GET['newAnswer2'])) || (empty($_GET['newAnswer3'])) || (empty($_GET['newAnswer4'])))){
        echo "Il manque une ou plusieurs réponse ";

    }elseif((!empty($_GET['soumettre'])) && (!isset($_GET['AnswerTrue1'])) && (!isset($_GET['AnswerTrue2'])) && (!isset($_GET['AnswerTrue3'])) && (!isset($_GET['AnswerTrue4'])) ){
        echo "Merci d'indiquer la réponse vrai";
    }else{
        echo "c'est à vous !";
    }?>













</div>
