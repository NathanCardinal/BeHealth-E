<?php

require '../Modele.php';

if (isset($_POST['submit'])) {

    $fields = [
        $_POST['prenom'], 
        $_POST['nom'], 
        $_POST['password'], 
        $_POST['adresse'], 
        $_POST['pays'], 
        $_POST['remarque'],
        $_POST['email'],
        $_POST['ville'],
        $_POST['postalCode'],
        $_POST['day'],
        $_POST['month'],
        $_POST['year'],
        //$_POST['gender']
    ];

    if (formVerify($fields))
    {
        $prenom = htmlentities($_POST['prenom']);
        $nom = htmlentities($_POST['nom']);
        $mdp = htmlentities($_POST['password']);
        $email = htmlentities($_POST['email']);
        $adresse = htmlentities($_POST['adresse']);
        $ville = htmlentities($_POST['ville']);
        $pays = htmlentities($_POST['pays']);
        $postalCode = htmlentities($_POST['postalCode']);
        $remarque = htmlentities($_POST['remarque']);
        $dateNaissance = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
        $gender = htmlentities($_POST['gender']);
        
        
        $db = DBConnect();

        $insertsql = 'INSERT INTO user (nom, prenom, dateNaissance, email, mdp, remarque, adresse, ville, pays, postalCode, gender) VALUES (:nom, :prenom, :dateNaissance, :email, :mdp, :remarque, :adresse, :ville, :pays, :postalCode, :gender)';
        $req = $db->prepare($insertsql);
        $req->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'dateNaissance' => $dateNaissance,
            'email' => $email,
            'mdp' => $mdp,
            'remarque' => $remarque,
            'adresse' => $adresse,
            'ville' => $ville,
            'pays' => $pays,
            'postalCode' => $postalCode,
            'gender' => $gender
        ]);
        
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