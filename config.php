<?php
    try
    {
        $bdd = PDO('mysql:host=localhost;dbname=inscription;charsert=utf8', 'root', '');
    } catch (Execption $e)
    {
        die('Erreur!'.$e->getMessage());
    }
?>