<?php

require_once '../vendor/autoload.php';

use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\ThemeRepository;
use App\Repository\AbstractRepository;

// GENERATE TABLE THEMES

 function displayTableTheme($rowsThemes, $headers){?>

         <tr>
            <?php foreach ($headers as $header): ?>
             <th><?= $header; ?></th>
            <?php endforeach; ?>
         </tr>

        <?php foreach ($rowsThemes as $row): ?>
        <tr>
            <td>#<?= $row->getId() ?></td>
            <td><?= $row->getName() ?></td>
            <td>
                <a class="btn" href="./EditTheme.php?id=<?=$row->getID()?>">Edit</a>
                <a class="btn" href="./Delete.php?id=<?=$row->getID()?>">Delete</a>
            </td>

        </tr>
        <?php endforeach; ?>



 <?php } ?>

<?php


function getHeaderTableTheme(){
    $headers = array();
    $headers[] = "ID";
    $headers[] = "Name";
    $headers[] = "Actions";
    return $headers;
    }

    //GENERATE TABLE QUIZ

function displayTableQuiz($rowsQuiz, $headersQuiz){?>


        <tr>
            <?php foreach ($headersQuiz as $header): ?>
                <th><?= $header; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($rowsQuiz as $row): ?>
            <tr>
                <td>#<?= $row->getId() ?></td>
                <td><?= $row->getName() ?></td>
                <td><?= $row->{'themeName'} ?></td>

                <td>
                    <a class="btn" href="./EditQuiz.php">Edit</a>
                    <a class="btn" href="./Delete.php">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>



<?php } ?>

<?php




function getHeaderTableQuiz(){
    $headersQuiz = array();
    $headersQuiz[] = "ID";
    $headersQuiz[] = "Name";
    $headersQuiz[] = "Theme";
    $headersQuiz[] = "Actions";
    return $headersQuiz;
}


// GENERATE TABLE QUESTION

function displayTableQuestion($rowsQuestion, $headersQuestion){?>


        <tr>
            <?php foreach ($headersQuestion as $header): ?>
                <th><?= $header; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($rowsQuestion as $row): ?>
            <tr>
                <td>#<?= $row->getId() ?></td>
                <td><?= $row->getQuestion() ?></td>
                <td><?= $row->{'quizName'} ?></td>
                <td>
                    <a class="btn" href="./EditQuestion.php">Edit</a>
                    <a class="btn" href="./Delete.php">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>



<?php } ?>

<?php

function getHeaderTableQuestion(){
    $headersQuestion = array();
    $headersQuestion[] = "ID";
    $headersQuestion[] = "Question";
    $headersQuestion[] = "Quiz";
    $headersQuestion[] = "Actions";
    return $headersQuestion;
}

// GENERATE TABLE QUESTION

function displayTableAnswer($rowsAnswer, $headersAnswer){?>


        <tr>
            <?php foreach ($headersAnswer as $header): ?>
                <th><?= $header; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($rowsAnswer as $row): ?>
            <tr>
                <td>#<?= $row->getId() ?></td>
                <td><?= $row->getAnswer() ?></td>
                <td><?= $row->getCheckId() ?></td>
                <td><?= $row->{'questionName'} ?></td>
                <td>
                    <a class="btn" href="./EditAnswers.php">Edit</a>
                    <a class="btn" href="./Delete.php">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>



<?php } ?>

<?php

function getHeaderTableAnswer(){
    $headersAnswer = array();
    $headersAnswer[] = "ID";
    $headersAnswer[] = "Réponse";
    $headersAnswer[] = "Resultat";
    $headersAnswer[] = "Question";
    $headersAnswer[] = "Actions";
    return $headersAnswer;
}