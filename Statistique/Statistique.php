<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Statistique.css"/>
</head>
<body>
	
<?php require('../sidebar/sidebar.php') ?>

<div class="flex-default-container">
	<div class="rangement">
		<div class="flex-container">
			<div class="screen-titre">
				<div>
					<img class="picto" width="80px" src="Stats.png"
						font-weight-bold>
				</div>
				<div>
					
						<h3 id="titre" class="titre">Statistiques</h3>
					</div>
			</div>
		</div>
            <div class="flex-container">
                <div class="vbox-container">
					<div class="screen">
						<h4 id="sous-titre" class="sous-titre">Cardiaque</h4>
						<svg class="graphPlacement" id="graphExemple1" width="350" height="225"></svg>
						<div class="cg_et_save">
							<p class="resume">Résumé de la semaine : <br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="../Capteurs/cardiaque.html" class="save-button" id="save-button" type="button" onclick="return redirectCapteurCardiaque()">Accéder au capteur</a>
						</div>
					</div>
                </div>

                <div class="vbox-container">
					<div class="screen">
						<h4 id="sous-titre" class="sous-titre">Co2</h4>
						<svg class="graphPlacement" id="graphExemple2" width="350" height="225"></svg>
						<div class="cg_et_save">
							<p class="resume">Résumé de la semaine : <br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="../Capteurs/co2.html" class="save-button" id="save-button" type="button" onclick="return redirectCapteurC02()">Accéder au capteur</a>
						</div>
					</div>
                </div>
            </div>

			<div class="flex-container">
                <div class="vbox-container">
					<div class="screen">
						<h4 id="sous-titre" class="sous-titre">Particule</h4>
						<svg class="graphPlacement" id="graphExemple3" width="350" height="225"></svg>
						<div class="cg_et_save">
							<p class="resume">Résumé de la semaine : <br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="../Capteur/particules.html" class="save-button" id="save-button" type="button" onclick="return redirectCapteurParticule()">Accéder au capteur</a>
						</div>
					</div>
                </div>

                <div class="vbox-container">
					<div class="screen">
						<h4 id="sous-titre" class="sous-titre">Température</h4>
						<svg class="graphPlacement" id="graphExemple4" width="350" height="225"></svg>
						<div class="cg_et_save">
							<p class="resume">Résumé de la semaine : <br>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="../Capteurs/temperature.html" class="save-button" id="save-button" type="button" onclick="return redirectCapteurTemperature()">Accéder au capteur</a>
						</div>
					</div>
                </div>
            </div>

    </div>
</div>
</body>
</html>
<script src="jsGraphDisplay.1.0.js"></script>
<script type="text/javascript" src="Statistique.js"></script>