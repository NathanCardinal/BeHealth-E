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
    const passwordInput = document.getElementById("login__input")
    const icon = document.getElementById("icon_password")
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      icon.innerText = "visibility"
    } else {
      passwordInput.type = "password"
      icon.innerText = "visibility_off"
    }
}