<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$address = $_POST['address'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$mailAddress = $_POST['mailAddress'];
$password = $_POST['password'];
$passwordAgain = $_POST['passwordAgain'];
$country = $_POST['country'];
$postalCode = $_POST['postalCode'];
$remarks = $_POST['remarks'];

//Connexion à la database
$connexion = new mysql('localhost','root','','behealthe');
if($connexion->connect_error){
    die('Inscription échouée : '.$connexion->connect_error);
} else {
    $stmt = $connexion->prepare("Veuillez remplir les (firstName, lastName, day, month, year, address, city, gender, mailAddress, password, passwordAgain, country, postalCode)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
}   $stmt->bind_param("ssiiisssssssis",$firstName, $lastName, $day, $month, $year, $address, $city, $gender, $password, $passwordAgain, $country, $postalCode, $remarks)
    $stmt->execute();
    echo "Inscription complète";
    $stmt->close();
    $connexion->close();

?>