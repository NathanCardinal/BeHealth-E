<?php

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$dateNaissance = $_POST ['year', 'month', 'day'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$pays = $_POST['pays'];
$postalCode = $_POST['postalCode'];
$remarque = $_POST['remarque'];

//Connexion à la database
$conn = mysqli_connect('localhost','root','','behealthe');
if($conn->connect_error){
    die('Inscription échouée : '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT into 'user' (firstName, lastName, day, month, year, address, city, gender, mailAddress, password, passwordAgain, country, postalCode)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
}   $stmt->bind_param("sssssssssis",$prenom, $nom, $dateNaissance, $adresse, $ville, $gender, $email, $password, $pays, $postalCode, $remarque)
    $stmt->execute();
    echo "Inscription complète";
    $stmt->close();
    $conn->close();

?>