<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
// $dateNaissance = $_POST['year', 'month', 'day'];
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
    $stmt = $conn->prepare("insert into 'user' (prenom, nom, address, ville, gender, email, password, pays, postalCode, remarque)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
}   $stmt->bind_param("ssssssssis",$prenom, $nom, $adresse, $ville, $gender, $email, $password, $pays, $postalCode, $remarque)
    $stmt->execute();
    echo "Inscription complète";
    $stmt->close();
    $conn->close();

?>
