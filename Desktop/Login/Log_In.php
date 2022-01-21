<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Log_In.css"/>
</head>
<body>
<?php

session_start();

if(isset($_POST['connexion'])){
     
    if(empty($_POST['email'])){
        echo "Le champ email est vide.";                 // Pour la sécurité : if(empty($_POST['email']||$_POST['mdp'])){  echo "Un des champs est vide."}
    } else {
        if(empty($_POST['mdp'])){
            echo "Le champ mdp est vide.";
        } else {

            $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8"); 
            $mdp = htmlentities($_POST['mdp'], ENT_QUOTES, "UTF-8");

            define('DB_SERVER', 'localhost');
            define('DB_email', 'root');
            define('DB_mdp', '');
            define('DB_NAME', 'behealthe');
             

            $mysqli = mysqli_connect(DB_SERVER, DB_email, DB_mdp, DB_NAME);

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {

                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE email = '".$email."' AND mdp = '".$mdp."'");

                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le email ou le mdp est incorrect, le compte n'a pas été trouvé.";
                } else {

                    $_SESSION['email'] = $email;
                    echo "Vous êtes à présent connecté !";
                   // header("Refresh: 3; deconnexion.php");    A UTILISER POUR LA REDIRECTION
                }
            }
        }
    }
}
?>

	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form action="Log_In.php" class="login" method="post">
					<img class="logo" width="200px" src="LogoBeHealth-e.png"font-weight-bold>
					<div class=titre><p>Connectez-vous</p> </div>
					<div class="login__field">
						<div><img class="picto_user" width="80px" src="https://cdn-icons-png.flaticon.com/512/709/709722.png"font-weight-bold></div>
						<input id="loginMail" type="text" class="login__input" name="email" placeholder="Identifiant">
					</div>
					<div class="login__field">
						<img class="picto_password" width="80px" src="https://cdn-icons-png.flaticon.com/512/807/807292.png"font-weight-bold>
						<input id="loginPassword" type="password" class="login__input" name="mdp" placeholder="Mot de Passe">
					</div>
					<i class="password_input" id="visibilityBtn"><span id="icon_password" class="material-icons">visibility_off</span></i>
					<a class="recup" href="RECUP_MDP.html" rel="stylesheet">J'ai oublié mon mot de passe</a>
					<input class="button login__submit" id="loginButton" name="connexion" type="submit">Se connecter</a>
					<a class="button sign__up" href="../Inscription/Inscription.html">S'inscrire</a>		
				</form>
				</div>
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape_reverse screen__background__shape2"></span>
				<span class="screen__background__shape_reverse screen__background__shape1"></span>		
			</div>		
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="Log_In.js"></script>