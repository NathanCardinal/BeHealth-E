<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="De: $name \n Message: $message";
$recipient = "contact.behealthe@gmail.com";
$subject = "Contact Form";
$mailheader = "De: $name $surname \n Objet: $object \n Message: $message";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Merci de nous avoir contacté ! Nous vous répondrons dans les plus briefs delais !" . " -" . "<a href='../Accueil/Accueil.html' style='text-decoration:none;color:#8B00FF;'> Retourner à la page d'accueil</a>";
?>