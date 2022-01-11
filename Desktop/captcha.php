<?php
session_start();

// Affichage en tant qu'image
header('Content-Type: image/png'); 
// Largeur de l'image 
$largeur=80;
// Hauteur de l'image
$hauteur=25;
// Lignes qui permettent de cacher le code
$lignes=16;
//Types de caractère du code qui sera affiché dans l'image
$caracteres="ABCDEF123456789!$%?/-+*";
//Création du rectangle du code aléatoire
$image = imagecreatetruecolor($largeur, $hauteur);
//Fond blanc dans le rectangle
imagefilledrectangle($image, 0, 0, $largeur, $hauteur, imagecolorallocate($image, 255, 255, 255));
//Ajout des lignes du $lignes soit 16 ici


// Fonction qui retourne la valeur RGB d'une couleur hexadecimale
function hexargb($hex) {
    return array("r"=>hexdec(substr($hex,0,2)),"g"=>hexdec(substr($hex,2,2)),"b"=>hexdec(substr($hex,4,2)));	// Valeur sous forme d'array
}


// Couleur aléatoire grace au str_shuffle avec 6 caractères max 
for($i=0;$i<=$lignes;$i++){
    $rgb=hexargb(substr(str_shuffle("ABCDEF0123456789"),0,6));
    imageline($image,rand(1,$largeur-25),rand(1,$hauteur),rand(1,$largeur+25),rand(1,$hauteur),imagecolorallocate($image, $rgb['r'], $rgb['g'], $rgb['b']));
}

$code1=substr(str_shuffle($caracteres),0,6);  // Création d'un code aléatoire avec 6 caractères
$_SESSION['code']=$code1;		//Enregistrement du code dans une session pour comparer ce que rentre l'utilisateur 
$code="";				//Initialisation du code
for($i=0;$i<=strlen($code1);$i++){
    $code .=substr($code1,$i,1)." ";	//on rajoute des espace entre chaque lettre ou chiffre pour faire plus aéré (notez le . devant = qui permettra d'ajouter un caractère après l'autre à $code)
}
//Ecriture du code dans le rectangle
imagestring($image, 5, 10, 5, $code, imagecolorallocate($image, 0, 0, 0));
//Affichage de l'image
imagepng($image);
//Destruction de l'image finale
imagedestroy($image);
?>


<!-- A mettre au dessus du code HTML de la page -->

session_start();
if(isset($_POST['captcha'])){
    if($_POST['captcha']==$_SESSION['code']){
        echo "Code correct";
    } else {
        echo "Code incorrect";
    }
}