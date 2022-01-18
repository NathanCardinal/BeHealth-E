<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test deconnexion</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<?php
// OUTIL DE DECONNEXION
session_start();
function destruction(){
  echo "Vous avez bien été deconnecté.";
  session_destroy();
  header("Refresh: 3; connexion.php");
 }
?>

<button type="button" onClick="destruction0()"> Déconnexion </button>
<script>
function destruction0(){
var result ="<?php destruction(); ?>";
document.write(result);
}
</script>

</body>
</html>