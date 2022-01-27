<?php

// connexion a la database
$conn = mysqli_connect("mysql:host=localhost:8889;dbname=behealthe", "root", "root");

// verif si faq existe
$sql = "SELECT * FROM faqs WHERE id = ?";
$statement = $conn->prepare($sql);
$statement->execute([
    $_REQUEST["id"]
]);
$faq = $statement->fetch();

if (!$faq)
{
    die("FAQ non trouvée");
}

// delete de la database
$sql = "DELETE FROM faqs WHERE id = ?";
$statement = $conn->prepare($sql);
$statement->execute([
    $_POST["id"]
]);

// redirection vers la page precedente
header("Location: " . $_SERVER["HTTP_REFERER"]);

?>































<!-- STOP A 14 50  -->