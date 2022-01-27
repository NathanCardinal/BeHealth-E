// type="text/javascript"
//     function sendEmail(){
//         var name = $("#name");
//         var surname = $("#surname");
//         var email = $("#email");
//         var subject = $("#subject");
//         var body = $("#body");

//         if(isNotEmpty(name) && isNotEmpty(surname) && isNotEmpty(email) && isNotEmpty(subject) &&isNotEmpty(body)){
//             $.ajax({
//                 url: 'sendEmail.php',
//                 method: 'POST',
//                 dataType: 'json',
//                 data:{
//                     name: name.val(),
//                     surname: surname.val(),
//                     email: email.val(),
//                     subject: subject.val(),
//                     body: body.val()
//                 }, success: function(response){
//                     $('#contactForm')[0].reset();
//                     $('.sent-notification').text("Mail envoyé avec succès.");
//                 }
//             });
//         }
//     }

function sendButton() {
    let text;
    if (confirm("Voulez-vous enregistrer votre profil ?") == true) {
      alert("Votre profil a été enregistré");
    } 
    // else {
    //     confirm("You canceled!");
    //   }
}


function checkEmpty() {
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
}