<?php

function DBConnect()
/*Connexion à la BDD*/
{
    $host = 'localhost';
    $dbname = 'behealthe';
    $dbuser = 'root';
    $dbpass = '';

    try 
    {
    $db = new PDO('mysql:host='.$host.'; dbname='.$dbname.'; charset=utf8',
        $dbuser,
        $dbpass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Améliore la gestion des erreurs
    } 
    catch (Exception $e) 
    {
        die('Erreur : '.$e->getMessage());
    }
    return $db;
}


function formVerify ($arrayFields) : bool
/*Verifie que les formulaires sont remplis*/
{
    foreach($arrayFields as $field)
    {
        if (isset($field) && !empty($field))
        {
            continue;
        }
        else {
            return false;
        }
    }
    return true;
}


function deconnexion()
{
/*Fonction de suppresion de session et de toutes les données temporaires client side qui y sont relatives*/
    echo "Vous avez bien été deconnecté.";
    session_unset();
    session_destroy();
    header("Refresh: 3; connexion.php");
}

?>