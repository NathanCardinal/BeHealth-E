type="text/javascript"
function recupMDP() {
    let text;
    var r = document.getElementById("recupButton");
    if (confirm("Voulez-vous envoyer la demande de récupération ?") == true) {
      alert("Votre demande a été envoyé");
      r.type = "submit";
    } 
    else {
        alert("La demande a été annulée");
            r.type = "button";
    }
}



function checkEmpty() {
    let recupImput = document.getElementById ("recupImput").value;
    console.log(recupImput)
  
    if(recupImput.length != 0){
        document.getElementById("recupImput").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("recupImput").style.borderColor = "#FF0000";
    }

    
    if(recupImput.length == 0){
        alert("Veuillez renseigner votre adresse mail");
    }
}
