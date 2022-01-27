<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require "PHPMailer/PHPMailer.php";
    require "PHPMailer/SMTP.php";
    require "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //Paramètres STMP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";               //Adresse IP ou DNS du serveur SMTP
    $mail->SMTPAuth = true;                        //Utiliser l'identification
    $mail->Username = "contact.behealthe@gmail.com";
    $mail->Password = 'BeHealth-e2021';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
    $mail->SMTPSecure = "tls";

    //Paramètres email
    $mail->IsHTML(true);
    $mail->setFrom($email, $name, $surname);
    $mail->addAddress("contact.behealthe@gmail.com");
    $mail->AddReplyTo($email);
    $mail->Subject = ("$subject");
    $mail->Body = ("De : $name $surname <br>    $email<br><br>Objet : $subject<br><br>Message :<br>$body");
    $envoyer= $mail->send(); 


    if ($envoyer == true) {
        echo "Merci de nous avoir contacté ! Nous vous répondrons dans les plus briefs delais ! " . $mail;
        // $status = "success";
        // $response = "Merci de nous avoir contacté ! Nous vous répondrons dans les plus briefs delais ! ";
    }
    else
    {
        // $status = "failed";
        // $response = "L'envoi a échoué. Veuillez réessayer. <br>" . $mail->ErrorInfo;
        echo "L'envoi a échoué. Veuillez réessayer. <br>" . $mail->ErrorInfo;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>