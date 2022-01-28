<?php

require '../Modele.php';

if (isset($_POST['submit'])) 
{

    $fields = [
        $_POST['username'],
        $_POST['password'],
    ];

    if (formVerify($fields))
    {
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
        
        
        $db = DBConnect();

        $sql = 'SELECT * FROM user WHERE email=:username';
        $req = $db->prepare($sql);
        $req->execute([
            'username' => $username,
        ]);

        $elements = $req->fetchAll();

        if ((count($elements) >= 1) && (password_verify($password ,$elements[0]['mdp']))) // Si le mot de passe entré correspond à celui dans la base de données, on initialise la session
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id_user'] = $elements[0]['id_user'];
            $_SESSION['prenom'] = $elements[0]['prenom'];
            $_SESSION['nom'] = $elements[0]['nom'];
            $_SESSION['adresse'] = $elements[0]['adresse'];
            $_SESSION['gender'] = $elements[0]['gender'];
            $_SESSION['pays'] = $elements[0]['pays'];
            $_SESSION['postalCode'] = $elements[0]['postalCode'];
            $_SESSION['ville'] = $elements[0]['ville'];
            $_SESSION['remarque'] = $elements[0]['remarque'];

            header('Location: ../Dashboard/dashboard.php');
        }
        else
        {
            echo '<script>alert("Identifiant ou mot de passe incorrect");</script>';
            return;
        }
        
        
    }
    else {
        echo "All field are required.";
        return;
    }
}
else {
    echo "Submit button is not set";
}

?>
