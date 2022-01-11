<?php

session_start();

if(isset($_POST['connexion'])){

    if(empty($_POST['usename'])){
        echo "Le champ Pseudo est vide.";
    } else {

        if(empty($_POST['password'])) {
            echo "le champs mot de passe est vide.";
        } else {

            $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8"); 
            $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

            $conn = mysqli_connect("localhost", "root", "password", behealthe);

            if(!$conn){
                echo "Erreur de connexion à la base de données.";
            } else {

                $request = mysqli_query($mysqli,"SELECT * FROM users WHERE pseudo = '".$username."' AND password = '".$password."'");

                if(mysqli_num_rows($request) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, veuillez réessayer.";
                } else {

                    $_SESSION['pseudo'] = $Pseudo;
                    header("Location: index.html"); 
                    exit;
                }
            }
        }
    }
}



?>