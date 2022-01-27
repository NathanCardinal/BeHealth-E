<html>
<div class="container">
	<div class="screen">
		<div class="screen__content">

			<form class="login" method="POST" action="connexionController.php">
				
				<img class="logo" width="200px" src="LogoBeHealth-e.png"font-weight-bold>
				<div class=titre><p>Connectez-vous</p> </div>
				<div class="login__field">
					<div><img class="picto_user" width="80px" src="https://cdn-icons-png.flaticon.com/512/709/709722.png"font-weight-bold></div>
					<input type="text" name='username' class="login__input" placeholder="Identifiant">
				</div>
				<div class="login__field">
					<img class="picto_password" width="80px" src="https://cdn-icons-png.flaticon.com/512/807/807292.png"font-weight-bold>
					<input type="password" name='password' class="login__input" id="login__input" placeholder="Mot de Passe">
				</div>
				<i class="password_input" id="visibilityBtn"><span id="icon_password" class="material-icons">visibility_off</span></i>
				<a class="recup" href="RECUP_MDP.html" rel="stylesheet">J'ai oublié mon mot de passe</a>
				<input class="button login__submit" type="submit" name="submit" value="Se connecter">
				<a class="button sign__up" href="../Inscription/inscriptionVue.php">S'inscrire</a>		
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
</html>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="connexionStyles.css"/>
<script type="text/javascript" src="Log_In.js"></script>