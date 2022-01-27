type="text/javascript"


// function sendEmail() {
//     let prenom = document.getElementById ("name").value;
//     let nom = document.getElementById ("surname").value;
//     let email = document.getElementById ("email").value;
//     let subject = document.getElementById ("subject").value;
//     let body = document.getElementById ("body").value;

//     console.log(prenom,nom,email,subject,body);
  
//     if(prenom.length != 0){
//         document.getElementById("name").style.borderColor = "#8B00FF";
//     }
//     else {
//         document.getElementById("name").style.borderColor = "#FF0000";
//     }


//     if(nom.length != 0){
//         document.getElementById("surname").style.borderColor = "#8B00FF";
//     }
//     else {
//         document.getElementById("surname").style.borderColor = "#FF0000";
//     }


//     if(email.length != 0){
//         document.getElementById("email").style.borderColor = "#8B00FF";
//     }
//     else {
//         document.getElementById("email").style.borderColor = "#FF0000";
//     }


//     if(subject.length != 0){
//         document.getElementById("subject").style.borderColor = "#8B00FF";
//     }
//     else {
//         document.getElementById("subject").style.borderColor = "#FF0000";
//     }


//     if(body.length != 0){
//         document.getElementById("body").style.borderColor = "#8B00FF";
//     }
//     else {
//         document.getElementById("body").style.borderColor = "#FF0000";
//     }

//     if(prenom.length == 0|| nom.length == 0|| email.length == 0|| subject.length == 0|| body.length == 0){
//         alert("Veuillez renseigner toutes les informations");
//         return false;
//     }
//     else{
//         alert("Votre message a été envoyé");
//     }
// }








function sendEmail() {

    var errormessage = "";
    var message = " Le ou les champs(s) vide(s) est/sont :\n";

    if (document.getElementById('name').value == "") {
        errormessage += "le champ Prenom est vide \n";
        document.getElementById('name').style.borderColor = "red";
    }
    else {
        document.getElementById('name').style.borderColor = "#8B00FF";
    }

    if (document.getElementById('surname').value == "") {
        errormessage += "le champ Nom est vide \n";
        document.getElementById('surname').style.borderColor = "red";
    }
    else {
        document.getElementById('surname').style.borderColor = "#8B00FF";
    }

    if (document.getElementById('email').value == "") {
        errormessage += "le champ Adresse Mail est vide \n";
        document.getElementById('email').style.borderColor = "red";
    }
    else {
        document.getElementById('email').style.borderColor = "#8B00FF";
    }
    
    if (document.getElementById('subject').value == "") {
        errormessage += "le champ Objet est vide \n";
        document.getElementById('subject').style.borderColor = "red";
    }
    else {
        document.getElementById('subject').style.borderColor = "#8B00FF";
    }

    if (document.getElementById('body').value == "") {
        errormessage += "le champ Message est vide \n";
        document.getElementById('body').style.borderColor = "red";
    }
    else {
        document.getElementById('body').style.borderColor = "#8B00FF";
    }

    if (errormessage != "") {
        alert(message, errormessage);
        return false;
    }

}
