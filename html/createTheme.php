<?php
$isPage="CreerFormulaire";
require_once '../vendor/autoload.php';


use App\Repository\ThemeRepository;

include('../partials/header.php');
$bdd= new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password:null);

if($bdd){
    echo "Connection successfull";
}else{
    die(mysqli_connect_error($bdd));
}


$newThemes = new ThemeRepository();
$displayTheme = $newThemes->findAll();
$newTheme = "nouveau Theme";


?>


<div class="bodyCreate">

    <h1>Bienvenue sur votre page de création</h1>

         <h2>Créer un nouveau thème</h2>

    <form method="GET" action="">

        <select class="" id="theme" name="option" required>
            <option id="option" name="vide" value="vide" selected="selected">----Select Theme----</option>
            <?php foreach ($displayTheme as $theme){ ?>
                <option id="option" name="themeChoice" value="<?= $theme->getName() ?>"><?= $theme->getName() ?></option>
            <?php } ?>
            <option id="option" name="newTheme" value="<?= $newTheme ?>" ><?= $newTheme ?></option>

        </select>

        <input type="submit" name="selectionner" value="selectionner" />



<?php if(isset($_GET['selectionner'] ) && ($_GET['selectionner']=== 'selectionner')){


         if($_GET['option'] === 'vide'){
        echo 'Selectionner un thème existant ou créer un nouveau thème';

        }


         elseif ($_GET['option'] === $newTheme) { ?>

             <button><a href="createQuiz.php">Valider la création d'un nouveau thème</a></button>


            <?php }

              else{ ?>
                      <button><a href="themeExistant.php">Vous souhaitez ajouter des données sur le theme <?= $_GET['option'] ?></a></button>;

                 <?php }
}else{
    print_r('vous allez entrer des données');
}

        ?>


        </form>







</div>
    <?php
    include('../partials/footer.php');
    ?>




