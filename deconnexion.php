<?php
    session_start();
    session_destroy(); //suppression des cookies
    include("inscription.php"); //retour à la page inscription
?>