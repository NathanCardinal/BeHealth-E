type="text/javascript"
function checkPassword() {
    let password = document.getElementById ("password").value;
    let passwordAgain =document.getElementById ("passwordAgain").value;
    console.log(password,passwordAgain)
    let passwordMessage = document.getElementById("passwordMessage");

    if(password.length != 0){
        if(password == passwordAgain){
            passwordMessage.textContent = "";
        }
        else {
            passwordMessage.textContent = "Les mots de passe ne correspondent pas";
            passwordMessage.style.color = "#FF0000";
        }
    }
    else {
        alert("Le champ mot de passe ne peut pas être vide");
        passwordMessage.textContent = "";
    }
}