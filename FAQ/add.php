<?php
	include('connect.php');
	include("FonctionHeader.php");

	$question = $answer = '';
	$errors = array('question' => '', 'answer' => '');

	if(isset($_POST['submit'])){

		// Verification question
		if(empty($_POST['question'])){
			$errors['question'] = 'question requise';
		}

		// Verification answer
		if(empty($_POST['answer'])){
			$errors['answer'] = 'answer requise ';
		}


		if(array_filter($errors)){
			//echo 'errors dans le formulaire';

 		} else {
	
			$question = PDO::prepare($conn, $_POST['question']);
			$answer = PDO::prepare($conn, $_POST['answer']);

			//$sql = "INSERT INTO faq(question,answer) VALUES('$question','$answer')";
			$q= $conn->prepare("INSERT INTO faq(question,answer) VALUES('$question','$answer')");
			//$q->execute();
			
			// save to db and check
			if($q->execute()){
				// Succès : redirection FAQGestion
				header('Location: FAQGestion.php');
			} else {
				echo 'query error: '. PDO::errorInfo($conn);
			}
		}
	}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../FAQ/FAQ_Admin.css"/>
</head>
<body>
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


<div class="flex-default-container">
    <div class="screen">
        <div>
            <h3 id="titre" class="titre">FAQ Admin</h3>
        </div>
 
            <!-- form pour add FAQ -->
            <form method="POST" action="add.php">
 
                <!-- question -->
                <div class="flex-container">
                    <label class="labels">Enter question</label>
                    <input type="text" name="question" class="form-control" required />
                </div>
 
                <!-- reponse -->
                <div class="flex-container">
                    <label class="labels">Enter Answer</label>
                    <textarea name="answer" id="answer" class="form-control" required></textarea>
                </div>
 
                <!-- submit button -->
                <div class="publish-button">
                    <input type="submit" name="submit" class="add-button" value="Add FAQ" />
                </div>
            </form>
    </div>
    </div>
    </body>
</html>

