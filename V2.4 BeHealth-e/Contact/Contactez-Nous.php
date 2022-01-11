<meta charset="utf-8">
<div class="sidebar_header">
</div>
<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <div class="sidebarMenuInner">
        <a class="bloc_sidebar_logo" href ="../Dashboard/dashboard.html">
            <img src="LogoBeHealth-e.png" class ="logo_sidebar"></img>
        </a>
        <a class="bloc_sidebar" href="../Dashboard/dashboard.html"><i class="fa fa-fw fa-home"></i>Accueil</a>
				<a class="bloc_sidebar" href="../Profil/profil.html"><i class="fa fa-fw fa-user"></i>Profil</a>
				<a class="drop_click"><i class="fas fa-microchip"></i>Capteurs &#9662;</a>
					<div class="capteurs_dropdown">
						<a id="sous_bloc_sidebar" href="../Capteurs/cardiaque.html"><i class="fas fa-heartbeat"></i>Cardiaque</a>
						<a id="sous_bloc_sidebar" href="../Capteurs/co2.html"><i class="fas fa-cloud"></i>CO2</a>
						<a id="sous_bloc_sidebar" href="../Capteurs/particules.html"><i class="fas fa-atom"></i>Particules</a>
						<a id="sous_bloc_sidebar" href="../Capteurs/temperature.html"><i class="fas fa-thermometer-half"></i>Température</a>
					</div>
				
				<a class="bloc_sidebar" href=""><i class="far fa-chart-bar"></i>Statistiques</a>
				<a class="bloc_sidebar" href="../FAQ/Faq.html"><i class="far fa-question-circle"></i>FAQ</a>
				<a class="bloc_sidebar" href="../Contact/Contactez-Nous.php"><i class="far fa-comments"></i>Contact</a>
				<a class="bloc_sidebar" target="blank" href="../Conditions-Générales.pdf"><i class="fas fa-clipboard-list"></i>Conditions</a>
				<a class="bloc_sidebar" target="blank" href="../Conditions-Générales.pdf"><i class="fas fa-shield-alt"></i>Confidentialité</a>
    </div>
    <div class="sign_out">
        <a href="../Accueil/Accueil.html">
            <img width="50px" src="https://cdn-icons-png.flaticon.com/512/1828/1828304.png">
        </a>
    </div> 
  </div>
<h4 class="sent-notification"></h4>
<form id="contact-form" action="sendEmail.php" method="POST">
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
                <input name="name" type="text" class="form-control" placeholder="Votre prénom">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>

                <label class="labels">Nom : </label>
                <input name="surname" type="text" class="form-control" placeholder="Votre nom">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>

                <label class="labels">Adresse Mail : </label>
                <input name="email" type="text" class="form-control" placeholder="Votre adresse mail">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>

                <label class="labels">Objet : </label>
                <input name="subject" type="text" class="form-control" placeholder="L'objet de votre message">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>

                <label class="labels">Message : </label>
                <textarea name="body" class="form-message" rows="3" cols="50" placeholder="Veuillez écrire votre message"></textarea>


                <div class="cg_et_save"><button class="send-button" type="submit" onclick="sendEmail()" value="Envoyer">Envoyer</button></div>
            </div>
        </div>
    </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    function sendEmail(){
        var name = $("#name");
        var surname = $("#surname");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if(isNotEmpty(name) && isNotEmpty(surname) && isNotEmpty(email) && isNotEmpty(subject) &&isNotEmpty(body)){
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data:{
                    name: name.val(),
                    surname: surname.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                }, success: function(response){
                    $('#contact-form')[0].reset();
                    $('.sent-notification').text("Mail envoyé avec succès.");
                }
            });
        }
    }
    
    function isNotEmpty(caller){
        if(caller.val() == ""){
            caller.css('border','1px solid #8B00FF');
            return false;
        }
        else
        {
            caller.css('border', '');
            return true;
        }
    }

</script> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" type="text/css" href="../Contact/Contactez-Nous.css" />
<script type="text/javascript" src="../Profil/Sidebar.js"></script> 