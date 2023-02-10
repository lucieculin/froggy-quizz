<?php
$isPage="themeExist";
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


$newThemes = new ThemeRepository();
$displayTheme = $newThemes->findAll();

$newsQuiz = new QuizRepository();
$displayQuiz = $newsQuiz->findAll();

$getTheme = $_GET['theme'];
$newQuiz = "nouveau Quiz";

foreach ($displayTheme as $item) {
    if($item->getName() === $getTheme){
       echo $result= $item->getId();
    }
}


?>

<div class="bodyCreate">

    <?php var_dump($getTheme); ?>

    <h1>Modification sur le thème <?= $getTheme ?></h1>

    <h2>Créer un nouveau Quiz</h2>





    <form method="GET" action="">

        <select class="" id="quiz" name="option" required>

            <option id="option" name="vide" value="vide" selected="selected">----Select Quiz----</option>
<?php if(!empty($getTheme)){?>
            <?php foreach ($displayQuiz as $quiz){ ?>

                <option id="option" name="QuizChoice" value="<?= $result?>"> <?php var_dump($result); ?><?= $quiz->getName()?></option>
            <?php } ?>
<?php } ?>
            <option id="option" name="newQuiz" value="<?= $newQuiz ?>" ><?= $newQuiz ?></option>

        </select>

        <input type="submit" name="selectionner" value="selectionner" />

        <?php if(isset($_GET['selectionner'] ) && ($_GET['selectionner']=== 'selectionner')){
            var_dump($_GET['option']);

            if($_GET['option'] === 'vide'){
                echo 'Selectionner un Quiz existant ou créer un nouveau Quiz';

            }


            elseif ($_GET['option'] === $newQuiz) { ?>

                <button><a href="createQuiz.php">Valider la création d'un nouveau Quiz</a></button>


            <?php }

            else{ ?>
                <button><a href="quizExist.php?valeur=<?=$_GET['option']?>">Vous souhaitez ajouter des données sur le Quiz <?= $_GET['option'] ?></a></button>
                <?php var_dump($_GET) ?>

            <?php }
        }else{
            print_r('vous allez entrer des données');
        }

        ?>


    </form>
































</div>