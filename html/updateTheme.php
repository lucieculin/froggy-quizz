<?php
$isPage = "updateTheme";
include('../partials/header.php');
require_once '../vendor/autoload.php';

use App\Repository\ThemeRepository;
use App\Class\Theme;

$bdd= new PDO("mysql:host=127.0.0.1:3306;dbname=froggy_quiz", 'root', password:null);

if($bdd){
    echo "Connection successfull";
}else{
    die(mysqli_connect_error($bdd));
}

$newThemes = new ThemeRepository();
$displayTheme = $newThemes->findAll();

$idTheme = intval($_GET['id']);

foreach ($displayTheme as $item) {
    if($item->getId() === $idTheme){
        echo $result = $item->getName();
    }
}



?>
<div class="bodyUpdate" >


<form method="get" action="">

    <label for="themeName">Remplacer le Theme "<?php echo $result ?>" : </label><br>
    <input type="text" id="themeName" name="themeName" placeholder="<?php echo $result ?>"><br>




    <input type="submit" name="Soumettre" value="Soumettre"/>



    <?php if((!empty($_GET['Soumettre'])) && (!empty($_GET['themeName']))  ){

        $themeName = $_GET['themeName'];


        $updateTheme = $bdd->query("UPDATE themes SET name = '$themeName' WHERE id = '$idTheme' ;");

        if($updateTheme){
            echo "Données importées avec succes";?>
            <button><a href="DatabaseTheme.php">Visualiser la nouvelle entrée</a></button>
        <?php }else{
            die(mysqli_connect_error($bdd));
        }
    }?>







</form>

    <button><a href="DatabaseTheme.php">Retour à la base de donnée</a></button>

    <button><a href="AdminQuiz.php">Retour à l'accueil Admin</a></button>

</div>

<?php
include('../partials/footer.php');
?>
