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

    <h1>FORMULAIRE DE CREATION</h1>

         <h2>Créer un nouveau thème</h2>

    <form method="POST" action="">

        <select class="" id="theme" name="option" required>
            <option id="vide" name="vide" value="vide">----Select Theme----</option>
            <?php foreach ($displayTheme as $theme){ ?>
                <option id="<?= $theme->getId() ?>" name="themeChoice" value="<?= $theme->getName()  ?>" ><?= $theme->getName() ?></option>
            <?php } ?>
            <option id="newTheme" name="newTheme" value="<?= $newTheme ?>"><?= $newTheme ?></option>

        </select>

        <input type="submit" name="selectionner"/>



    </form>


    <?php if(($_POST['option'] === 'vide')){
        echo 'Selectionner un thème existant ou créer un nouveau thème';

    }  elseif(($_POST['option'] === $newTheme)){ ?>

        <form method="GET" action="">

            <label for="theme"  >Entrer un nouveau thème :</label>

            <input type="text" name="theme" id="theme" value=""/>


                <input type="submit" name="soumettre"/>

            <?php
            if(!empty($_GET['soumettre'])){
                $theme = $_GET['theme'];

                $addTheme = $bdd->query("INSERT INTO themes (themes.name) VALUES ('$theme');");

                if($addTheme){
                    echo "Les Données importées avec succes";
                }else{
                    die(mysqli_connect_error($bdd));
                }
            }?>

            <?php print_r($_GET['soumettre']) ; ?>

        </form>


    <?php } else{
        echo 'ici on va mettre ce la suite pour un theme existant';
    } ?>


</div>
    <?php
    include('../partials/footer.php');
    ?>




