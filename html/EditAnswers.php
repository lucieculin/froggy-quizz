<?php
$isPage = "EditQuestion";
include('../partials/header.php');
require_once '../vendor/autoload.php';

?>
<div class="body">

    <div class="answer">
    <form>
        <label for="answer1">Réponse 1</label><br>
        <input type="text" id="answer1" name="answer1"><br>
    </form>
        <input type="radio" name ="answer1" id="answer1" value="True">
        <label for="answer2">True</label>
        <input type="radio" name ="answer1" id="answer1" value="False">
        <label for="answer1">False</label>
    </div>

    <div class="answer">
        <form>
            <label for="answer2">Réponse 2</label><br>
            <input type="text" id="answer2" name="answer2"><br>
        </form>
        <input type="radio" name ="answer2" id="answer2" value="True">
        <label for="answer2">True</label>
        <input type="radio" name ="answer2" id="answer2" value="False">
        <label for="answer2">False</label>
    </div>

    <div class="answer">
        <form>
            <label for="answer3">Réponse 3</label><br>
            <input type="text" id="answer3" name="answer3"><br>
        </form>
        <input type="radio" name ="answer3" id="answer3" value="True">
        <label for="answer3">True</label>
        <input type="radio" name ="answer3" id="answer3" value="False">
        <label for="answer3">False</label>
    </div>

    <div class="answer">
        <form>
            <label for="answer4">Réponse 4</label><br>
            <input type="text" id="answer4" name="answer4"><br>
        </form>
        <input type="radio" name ="answer4" id="answer4" value="True">
        <label for="answer4">True</label>
        <input type="radio" name ="answer4" id="answer4" value="False">
        <label for="answer4">False</label>
    </div>




    <div class="input">
        <input type="submit" value="Envoyer en Base de données">
    </div>

</div>

<?php
include('../partials/footer.php');
?>
