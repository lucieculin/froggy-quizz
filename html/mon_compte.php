<?php
    session_start();
    if(isset($_SESSION['user']))
        header('Location:index.php');
    ?>



<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <title>Bonjour !</title>
    </head>

    <body>
    <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
    </body>
</html>