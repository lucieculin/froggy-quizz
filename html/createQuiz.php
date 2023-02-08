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

    <h1>Quel est le nom de votre nouveau thème</h1>

    <form method="GET" action="">

        <label for="theme"  >Entrer un nouveau thème :</label>

        <input type="text" name="theme" id="theme" value=""/>


        <input type="submit" name="soumettre" value="soumettre"/>

        <?php if((isset($_GET['soumettre'])) && (isset($_GET['theme']) )){
        var_dump($_GET);

        $theme = $_GET['theme'];


        $addTheme = $bdd->query("INSERT INTO themes (themes.name) VALUES ('$theme');");

        if($addTheme){
        echo "Les Données importées avec succes";
        }else{
        die(mysqli_connect_error($bdd));
        }
        }?>




    </form>

