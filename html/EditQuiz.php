<?php
$isPage = "EditQuiz";
include('../partials/header.php');
require_once '../vendor/autoload.php';

?>
<div class="body">
    <form>
        <label for="fname">Quiz</label><br>
        <input type="text" id="fname" name="fname"><br>
    </form>
    <form method="post" action="creation.php" enctype="multiârt/form-data">
        <input type="file" name="fichier">
    </form>

    <div class="input">
        <input type="submit" value="Envoyer en Base de données">
    </div>

</div>

<?php
include('../partials/footer.php');
?>
