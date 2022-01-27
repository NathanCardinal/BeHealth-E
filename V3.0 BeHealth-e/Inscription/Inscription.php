<!-- 
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
$conn = newmysqli_connect('localhost','root','','behealthe');
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
 -->







<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['prenom']) && isset($_POST['nom']) &&
        isset($_POST['password']) && isset($_POST['email']) &&
        isset($_POST['adresse']) && isset($_POST['ville']) &&
        isset($_POST['pays']) && isset($_POST['postalCode']) &&
        isset($_POST['remarque']) && isset($_POST['gender'])
        ){
        
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mdp = $_POST['password'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $pays = $_POST['pays'];
        $postalCode = $_POST['postalCode'];
        $remarque = $_POST['remarque'];
        $gender = $_POST['gender'];
 
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "InscriptionTest";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
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
                $stmt->bind_param("sssssssss",$prenom, $nom, $mdp, $email, $adresse, $ville, $pays, $remarque, $gender);
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
