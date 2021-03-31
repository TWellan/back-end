<?php
    try
    {
        $bdd = PDO('mysql:host=localhost','dbname=inscription', 'root', '');
    } catch (Execption $e)
    {
        die('Erreur!'.$e->getMessage());
    }
?>