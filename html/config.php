<?php
require_once 'vendor/autoload.php';
try

{
    $bdd = new PDO('mysql:host=localhost;dbname=froggy_quiz;charset=utf8','root','');
}catch(Exception $e)
{
    die('Erreur' .$e->getMessage());
}
