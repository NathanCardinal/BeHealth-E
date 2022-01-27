type="text/javascript"

function saveProfil() {
    let text;
    var s = document.getElementById("save-button");
    if (confirm("Voulez-vous enregistrer votre profil ?") == true) {
      alert("Votre profil a été enregistré");
      s.type = "submit";
    } 
    else {
        alert("L'enregistrement a été annulé");
            s.type = "button";
    }
}




function checkPassword() {
  let password = document.getElementById ("password").value;
  let passwordAgain = document.getElementById ("passwordAgain").value;
  console.log(password,passwordAgain)

  if(password.length != 0){
      if(password == passwordAgain){
          document.getElementById("password").style.borderColor = "#8B00FF";
          document.getElementById("passwordAgain").style.borderColor = "#8B00FF";
      }
      else {
          alert("Les mots de passe ne correspondent pas");
          document.getElementById("password").style.borderColor = "#FF0000";
          document.getElementById("passwordAgain").style.borderColor = "#FF0000";
      }
  }
}




function checkEmpty() {
    let prenom = document.getElementById ("prenom").value;
    let nom = document.getElementById ("nom").value;
    let adresse = document.getElementById ("adresse").value;
    let ville = document.getElementById ("ville").value;
    let email = document.getElementById ("email").value;
    let password = document.getElementById ("password").value;
    let passwordAgain = document.getElementById ("passwordAgain").value;
    let pays = document.getElementById ("pays").value;
    let postalCode = document.getElementById ("postalCode").value;
    console.log(prenom,nom,adresse,ville,email,password,passwordAgain,pays,postalCode)
  
    if(prenom.length != 0){
        document.getElementById("prenom").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("prenom").style.borderColor = "#FF0000";
    }


    if(nom.length != 0){
        document.getElementById("nom").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("nom").style.borderColor = "#FF0000";
    }


    if(adresse.length != 0){
        document.getElementById("adresse").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("adresse").style.borderColor = "#FF0000";
    }


    if(ville.length != 0){
        document.getElementById("ville").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("ville").style.borderColor = "#FF0000";
    }


    if(email.length != 0){
        document.getElementById("email").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("email").style.borderColor = "#FF0000";
    }


    if(password.length != 0){
    }
    else {
        document.getElementById("password").style.borderColor = "#FF0000";
    }


    if(passwordAgain.length != 0){
    }
    else {
        document.getElementById("passwordAgain").style.borderColor = "#FF0000";
    }


    if(pays.length != 0){
        document.getElementById("pays").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("pays").style.borderColor = "#FF0000";
    }


    if(postalCode.length != 0){
        document.getElementById("postalCode").style.borderColor = "#8B00FF";
    }
    else {
        document.getElementById("postalCode").style.borderColor = "#FF0000";
    }

    
    if(prenom.length == 0|| nom.length == 0|| adresse.length == 0|| ville.length == 0|| email.length == 0|| password.length == 0|| passwordAgain.length == 0|| pays.length == 0|| postalCode.length == 0){
        alert("Veuillez renseigner toutes les informations");
    }
}





function genderCheck() {      
    // Query each group for a checked radio button:
    var Radio = document.querySelector("[type=radio]:checked");
            
    // If each variable holds a valid reference to an element, 
    // then a pet and a color were chosen/
    if(Radio){
      // A string holding a number can be converted quickly to a number by 
      // prepending a plus sign in front of it. For multiplication, just use *
      // as the operator insteach of + (the one in the middle)
              
    } 
    else {
      // Otherwise, one or both were not chosen
      alert("Veuillez renseigner votre sexe");
    }     
}








function dateCheck() {
 var ddlDay = document.getElementById("dayCheck");
 var ddlMonth = document.getElementById("monthCheck");
 var ddlYear = document.getElementById("yearCheck");
 var selectedValueDay = ddlDay.options[ddlDay.selectedIndex].value;
 var selectedValueMonth = ddlMonth.options[ddlMonth.selectedIndex].value;
 var selectedValueYear = ddlYear.options[ddlYear.selectedIndex].value;
   
   if (selectedValueDay == "day"|| selectedValueMonth == "month"|| selectedValueYear == "year")
   {
    alert("Veuillez renseigner votre date de naissance");
    
        if (selectedValueDay == "day") {
            document.getElementById("dayCheck").style.borderColor = "#FF0000";
        }
        else {
            document.getElementById("dayCheck").style.borderColor = "#8B00FF";
        }


        if (selectedValueMonth == "month") {
            document.getElementById("monthCheck").style.borderColor = "#FF0000";
        }
        else {
            document.getElementById("monthCheck").style.borderColor = "#8B00FF";
        }


        if (selectedValueYear == "year") {
            document.getElementById("yearCheck").style.borderColor = "#FF0000";
        }
        else {
            document.getElementById("yearCheck").style.borderColor = "#8B00FF";
        }

   }
   else {
    document.getElementById("dayCheck").style.borderColor = "#8B00FF"
    document.getElementById("monthCheck").style.borderColor = "#8B00FF"
    document.getElementById("yearCheck").style.borderColor = "#8B00FF"
   }
}



function postalNumbers(objEvt) {
    var charCode = (objEvt.which) ? objEvt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    else {
        return true;
    }
}