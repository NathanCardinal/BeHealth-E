type="text/javascript"

  window.addEventListener("DOMContentLoaded", function(e) {

    var myForm = document.getElementById("inscriptionForm");
    var checkForm = function(e) {
      if(!this.terms.checked) {
        alert("Veuillez accepter les Termes et Conditions d'Utilisateur pour vous inscrire");
        this.terms.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
    };

    // attach the form submit handler
    myForm.addEventListener("submit", checkForm, false);

    var myCheckbox = document.getElementById("field_terms");
    var myCheckboxMsg = "Veuillez accepter les Termes et Conditions d'Utilisateur pour vous inscrire";

    // set the starting error message
    myCheckbox.setCustomValidity(myCheckboxMsg);

    // attach checkbox handler to toggle error message
    myCheckbox.addEventListener("change", function(e) {
      this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : "Veuillez accepter les Termes et Conditions d'Utilisateur pour vous inscrire");
    }, false);

  }, false);

