<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="contact.css" />
</head>
<body>
    
    <?php require('../sidebar/sidebar.php') ?>

    <h4 class="sent-notification"></h4>
    <form id="contact-form" method="POST" action="sendEmail.php">
    <div class="flex-default-container">
        <div class="screen">
            <div>
                <img class="picto" width="80px" src="https://cdn-icons-png.flaticon.com/512/3447/3447476.png"
                    font-weight-bold>
            </div>
            <div>
                <h3 id="titre" class="titre">Contactez-nous</h3>
            </div>
            <div class="flex-container">
                <div class="vbox-container">
                    <label class="labels">Prénom : </label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Votre prénom">

                    <label class="labels">Nom : </label>
                    <input id="surname" name="surname" type="text" class="form-control" placeholder="Votre nom">

                    <label class="labels">Adresse Mail : </label>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Votre adresse mail">

                    <label class="labels">Objet : </label>
                    <input id="subject" name="subject" type="text" class="form-control" placeholder="L'objet de votre message">

                    <label class="labels">Message : </label>
                    <textarea id="body" name="body" class="form-message" rows="3" cols="50" placeholder="Veuillez écrire votre message"></textarea>


                    <div class="cg_et_save"><button id="send-button" class="send-button" type="submit" onsubmit="return sendEmail()" value="Envoyer">Envoyer</button></div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" href="Contact-Us.js"></script>
<script type="text/javascript" src="../Profil/Sidebar.js"></script>