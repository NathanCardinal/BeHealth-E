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
        $_POST['gender']
    ];

    if (formVerify($fields)){
        
        $prenom = htmlentities($_POST['prenom']);
        $nom = htmlentities($_POST['nom']);
        $mdp = htmlentities($_POST['password']);
        $email = htmlentities($_POST['email']);
        $adresse = htmlentities($_POST['adresse']);
        $ville = htmlentities($_POST['ville']);
        $pays = htmlentities($_POST['pays']);
        $postalCode = htmlentities($_POST['postalCode']);
        $remarque = htmlentities($_POST['remarque']);
        $gender = htmlentities($_POST['gender']);
 
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "InscriptionTest";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {

            // Insertion des données en base

            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(prenom, nom, mdp, email, adresse, ville, pays, remarque, gender) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssssssss", $prenom, $nom, $mdp, $email, $adresse, $ville, $pays, $remarque, $gender);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
