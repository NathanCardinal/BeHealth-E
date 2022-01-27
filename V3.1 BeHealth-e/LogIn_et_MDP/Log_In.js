type="text/javascript"
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

const visibilityBtn = document.getElementById("visibilityBtn")
visibilityBtn.addEventListener("click", toggleVisibility)

function toggleVisibility() {
  const passwordInput = document.getElementById("loginPassword")
  const icon = document.getElementById("icon_password")
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.innerText = "visibility"
  } else {
    passwordInput.type = "password"
    icon.innerText = "visibility_off"
  }
}

function checkEmptyLogin() {
  let loginMail = document.getElementById ("loginMail").value;
  let loginPassword = document.getElementById ("loginPassword").value;

  console.log(loginMail,loginPassword)

  if(loginMail.length != 0){
      document.getElementById("loginMail").style.borderColor = "#8B00FF";
  }
  else {
      document.getElementById("loginMail").style.borderColor = "#FF0000";
  }

  if(loginPassword.length != 0){
    document.getElementById("loginPassword").style.borderColor = "#8B00FF";
}
  else {
    document.getElementById("loginPassword").style.borderColor = "#FF0000";
  }

  
  if(loginMail.length == 0 && loginPassword == 0) {
    alert("Veuillez taper votre adresse mail et votre mot de passe")
  }
  else {
    if(loginMail.length == 0){
      alert("Veuillez taper votre adresse mail");
    }

    if(loginPassword.length == 0){
      alert("Veuillez taper votre mot de passe");
    }
  }

  if(loginMail.length != 0 && loginPassword.length != 0) {
    var c = document.getElementById("loginButton");
      c.type = "submit";
      c.href="../Dashboard/dashboard.html";
  } 
  else {
        alert("La connexion a échoué");
            c.type = "button";
  }
}