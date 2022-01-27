type="text/javascript"
var acc = document.getElementsByClassName("drop_click");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var capteurs_dropdown = this.nextElementSibling;
    if (capteurs_dropdown.style.maxHeight) {
      capteurs_dropdown.style.maxHeight = null;
    } else {
      capteurs_dropdown.style.maxHeight = capteurs_dropdown.scrollHeight + "px";
    } 
  });
}


// 1) Création d'un objet jsGraphDisplay
var graph = new jsGraphDisplay();

// 2) Ajout des données
graph.DataAdd({
data: [
	[4, 21],
	[8, 23],
	[12, 26],
	[16, 25],
	[20, 20],
	[24, 22],
	[28, 27],
	[32, 35]
]
});

// 3) Affichage du résultat
graph.Draw('graphExemple1');
graph.Draw('graphExemple2');
graph.Draw('graphExemple3');
graph.Draw('graphExemple4');


function redirectCapteurCardiaque() {

  if (confirm("Vous allez être redirigé vers la page Capteur Cardiaque. Voulez-vous continuer ?") == true) {
  } 
  else {
      alert("La redirection a été annulée");
          return false;
  }
}

function redirectCapteurC02() {

  if (confirm("Vous allez être redirigé vers la page Capteur C02. Voulez-vous continuer ?") == true) {
  } 
  else {
      alert("La redirection a été annulée");
          return false;
  }
}

function redirectCapteurParticule() {

  if (confirm("Vous allez être redirigé vers la page Capteur Particule. Voulez-vous continuer ?") == true) {
  } 
  else {
      alert("La redirection a été annulée");
          return false;
  }
}

function redirectCapteurTemperature() {

  if (confirm("Vous allez être redirigé vers la page Capteur Température. Voulez-vous continuer ?") == true) {
  } 
  else {
      alert("La redirection a été annulée");
          return false;
  }
}