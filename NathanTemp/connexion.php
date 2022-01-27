
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test connexion</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<?php

session_start();

if(isset($_POST['connexion'])){
     
    if(empty($_POST['username'])){
        echo "Le champ Username est vide.";                 // Pour la sécurité : if(empty($_POST['username']||$_POST['password'])){  echo "Un des champs est vide."}
    } else {
        if(empty($_POST['password'])){
            echo "Le champ Password est vide.";
        } else {

            $username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8"); 
            $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

            define('DB_SERVER', 'localhost');
            define('DB_USERNAME', 'root');
            define('DB_PASSWORD', '');
            define('DB_NAME', 'behealthe');
             

            $mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {

                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");

                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le username ou le password est incorrect, le compte n'a pas été trouvé.";
                } else {

                    $_SESSION['username'] = $username;
                    echo "Vous êtes à présent connecté !";
                   // header("Refresh: 3; deconnexion.php");    A UTILISER POUR LA REDIRECTION
                }
            }
        }
    }
}
?>

 <form action="connexion.php" method="post">
    <p>Username: <input type="text" name="username" />
    <br />
    <p>Password: <input type="password" name="password" />
    <br />
    <input type="submit" name="connexion" value="Connexion" />
</form>

<script language="JavaScript">


function heuredynamique()
  {
  date = new Date;
  sec = date.getSeconds();
  min = date.getMinutes();
  heure = date.getHours();
  min = date.getMinutes();
  jour = date.getDate();
  mois = date.getMonth()+1;
  annee = date.getFullYear();
  if (sec < 10)
    sec0 = "0";
  else
    sec0 = "";
  if (min < 10)
    min0 = "0";
  else
    min0 = "";
  if (heure < 10)
    heure0 = "0";
  else
    heure0 = "";
  if (jour < 10)
    jour0= "0";
  else 
    jour0="";
  if (mois < 10)
    mois0 = "0";
  else 
    mois0= "";    
  
  Total = heure0 + heure + ":" + min0 + min + ":" + sec0 + sec;
  DinaHeure = Total
  if (document.getElementById){
    document.getElementById("HeureInitialisation").innerHTML=DinaHeure;
  }
  setTimeout("heuredynamique()", 1000)

  DinaDate = jour0 + jour + ":" + mois0 + mois + ":" + annee
  view= DinaDate
  if (document.getElementById){
    document.getElementById("DateInitialisation").innerHTML=DinaDate;
  }
  setTimeout("datedynamique()", 1000)
  }
window.onload = heuredynamique;
window.onload = datedynamique;

</script>

<script language="javascript">
  function salepute(){	
	var pokepi = document.getElementByClassName("yoyo");
	pokepi[0].style.color= "red";
	}
</script>

<div id="HeureInitialisation">Heure ici</div>
<div id="DateInitialisation">Date ici</div>
<div class="yoyo" onload="salepute()"> Bonjour c'est mon code!</div>
</body>
</html>