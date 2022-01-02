<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "contact.behealthe@gmail.com";
$subject = "Contact Form";
$mailheader = "De: $name $surname \n Objet: $object \n Message: $message";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='../Contact/Contact-us_non_connecte.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
