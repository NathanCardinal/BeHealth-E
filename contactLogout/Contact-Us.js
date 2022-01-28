type="text/javascript"


function sendEmail() {
    let prenom = document.getElementById ("name").value;
    let nom = document.getElementById ("surname").value;
    let email = document.getElementById ("email").value;
    let subject = document.getElementById ("subject").value;
    let body = document.getElementById ("body").value;

    console.log(prenom,nom,email,subject,body)
  
    if(prenom.length != 0){
        document.getElementById("name").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("name").style.borderColor = "#FF0000";
    }


    if(nom.length != 0){
        document.getElementById("surname").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("surname").style.borderColor = "#FF0000";
    }


    if(email.length != 0){
        document.getElementById("email").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("email").style.borderColor = "#FF0000";
    }


    if(subject.length != 0){
        document.getElementById("subject").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("subject").style.borderColor = "#FF0000";
    }


    if(body.length != 0){
        document.getElementById("body").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("body").style.borderColor = "#FF0000";
    }

    if(prenom.length == 0|| nom.length == 0|| email.length == 0|| subject.length == 0|| body.length == 0){
        alert("Veuillez renseigner toutes les informations");
    }
    else{
        alert("Votre message a été envoyé")
    }
}