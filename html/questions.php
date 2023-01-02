<?php
$isPage="questions";
include_once('../repository/quiz.Repository.php');
include_once('../repository/questions.Repository.php');
include_once('../class/questions.php');
include_once('../repository/answer_qcm.Repository.php');
$idQuiz = intval($_GET['id']);
$quiz = new QuizRepository();
$theQuiz = $quiz->findById($idQuiz);
$question = new QuestionRepository();
$questions = $question->findByQuizId($idQuiz);
$theQuestion = $questions[mt_rand(0, 9)];
$answer = new AnswerRepository();
$answers = $answer->findByQuestionId($theQuestion->id);


include('../partials/header.php');

?>





<div class="main">




    <div class="title">

        <h1><?=$theQuiz->name;?></h1>

    </div>

    <div class="question">

        <h2><?= $theQuestion->question?></h2>

    </div>



    <div class="image">
    <img src="../assets/images/kaamelott.png">
    </div>


    
    <div class="responces">

        <div class="A"><a href="#">A. <?= $answers[0]->answer?></a></div>

        <div class="B"><a href="#">B. <?= $answers[1]->answer?></a></div>

        <div class="C"><a href="#">C. <?= $answers[2]->answer?></a></div>

        <div class="D"><a href="#">D. <?= $answers[3]->answer?></p></a></div>
    </div>



    <div class="progress">


        <?php
        $questions=[0,1,2,3,4,5,6,7,8,9];
        foreach($questions as $question){
        $isResponced=false;
        $isCorrect=false;
            if($isResponced==false){ ?>
                <img src="../assets/images/pattounes grise.png">
        <?php
            }
        elseif($isResponced==true && $isCorrect==true){ ?>
                <img src="../assets/images/pattounes verte.png">
        <?php
        }
        elseif($isResponced==true && $isCorrect==false){ ?>
                <img src="../assets/images/pattounes rouge.png">
        <?php
        }
        }
        ?>

</div>


<?php
include('../partials/footer.php')
?>