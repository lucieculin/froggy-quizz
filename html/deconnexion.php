<?php
error_reporting(E_ERROR | E_NOTICE | E_PARSE);
// Ouverture Session
session_start();
require_once '../vendor/autoload.php';
$isPage = "deconnexion";
include('../partials/header.php');
// Supprime une variable
unset($_SESSION["user"]);


include('../partials/footer.php')
?>

