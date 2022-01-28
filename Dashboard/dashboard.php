<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>BeHealth-e</title>
  <link href="dashboardstyle.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
	<body>

	<?php require('../sidebar/sidebar.php') ?>

	    <div class="globalDashboard">    <!-- Début Dashboard -->
	        <header>
	            <h1 id="zaza">Bonjour, <?php echo $_SESSION['prenom']; ?></h1>
	            <img class="logoMin" src="Img/Logo_BeHealth-e.png">
	        </header>
	        <div class="mainContainer">
	            <div class="sensorsContainer">
	                <div class="sensorsColumn">
	                    <a href="../Capteurs/temperature.php">
	                        <div class="sensorsItem" name="Temperature">
	                            <div class="valueTop">
	                                <div class="sensorsIcon">
	                                    <img src="Img/thermometer.png">
	                                </div>
	                                <div class="sensorsValue">20,3</div>
	                                <div class="sensorsUnit">°C</div>
	                            </div>
	                            <div class="valueBottom">Température</div>
	                        </div>
	                    </a>

	                    <a href="../Capteurs/particules.php">
	                        <div class="sensorsItem" name="Particules">
	                            <div class="valueTop">
	                                <div class="sensorsIcon">
	                                    <img src="Img/particle.png">
	                                </div>
	                                <div class="sensorsValue">443,0</div>
	                                <div class="sensorsUnit">PPM</div>
	                            </div>
	                            <div class="valueBottom">Particules</div>
	                        </div>
	                    </a>
	                </div>

	                <div class="sensorsColumn">
						<a href="../Capteurs/co2.php">
							<div class="sensorsItem" name="CO2">
								<div class="valueTop">
									<div class="sensorsIcon">
										<img src="Img/particle.png">
									</div>
									<div class="sensorsValue">443,0</div>
									<div class="sensorsUnit">PPM</div>
								</div>
								<div class="valueBottom">Concentration de CO<sub>2</sub></div>
							</div>
						</a>

						<a href="../Capteurs/cardiaque.php">
							<div class="sensorsItem" name="Cardiaque">
								<div class="valueTop">
									<div class="sensorsIcon">
										<img src="Img/heart-beat.png">
									</div>
									<div class="sensorsValue">63,5</div>
									<div class="sensorsUnit">BPM</div>
								</div>
								<div class="valueBottom">Rythme cardiaque</div>
							</div>
						</a>

	                </div>
	            </div>
	            <div class="mapContainer">
	                <iframe class="mapItem" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.2211249144787!2d2.3283344338616474!3d48.84492377930919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671ce3fa0c01f%3A0x9bd1ac22c478d56e!2sISEP!5e0!3m2!1sfr!2sfr!4v1639568610760!5m2!1sfr!2sfr" 
	                allowfullscreen="" loading="lazy"></iframe>

	                <div class="recommended">Recommendations :<br> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
	            </div>
	        </div> 
	    </div>  
	</body>
</html>
<script type="text/javascript" src="../Profil/Sidebar.js"></script> 