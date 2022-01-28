<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sidebar/sidebarStyle.css">
    <title>Document</title>
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
            <a class="bloc_sidebar_logo" href ="../Dashboard/dashboard.php">
                <img src="LogoBeHealth-e.png" class ="logo_sidebar"></img>
            </a>
            <a class="bloc_sidebar" href="../Dashboard/dashboard.php"><i class="fa fa-fw fa-home"></i>Accueil</a>
            <a class="bloc_sidebar" href="../Profil/Profil.php"><i class="fa fa-fw fa-user"></i>Profil</a>
            <a class="drop_click"><i class="fas fa-microchip"></i>Capteurs &#9662;</a>
                <div class="capteurs_dropdown">
                    <a id="sous_bloc_sidebar" href="../Capteurs/cardiaque.php"><i class="fas fa-heartbeat"></i>Cardiaque</a>
                    <a id="sous_bloc_sidebar" href="../Capteurs/co2.php"><i class="fas fa-cloud"></i>CO2</a>
                    <a id="sous_bloc_sidebar" href="../Capteurs/particules.php"><i class="fas fa-atom"></i>Particules</a>
                    <a id="sous_bloc_sidebar" href="../Capteurs/temperature.php"><i class="fas fa-thermometer-half"></i>Température</a>
                </div>
            
            <a class="bloc_sidebar" href="../Statistique/Statistique.php"><i class="far fa-chart-bar"></i>Statistiques</a>
            <a class="bloc_sidebar" href="../FAQ/Faq.php"><i class="far fa-question-circle"></i>FAQ</a>
            <a class="bloc_sidebar" href="../Contact/contact.php"><i class="far fa-comments"></i>Contact</a>
            <a class="bloc_sidebar" target="blank" href="../ConditionsGenerales.pdf"><i class="fas fa-clipboard-list"></i>Conditions</a>
            <a class="bloc_sidebar" target="blank" href="../ConditionsGenerales.pdf"><i class="fas fa-shield-alt"></i>Confidentialité</a>
        </div>
        <div class="sign_out">
            <a href="../Accueil/Accueil.html">
                <img width="50px" src="https://cdn-icons-png.flaticon.com/512/1828/1828304.png">
            </a>
        </div> 
        </div>
</body>
</html>