type="text/javascript"
var acc = document.getElementsByClassName("FAQ");
var j;

for (j = 0; j < acc.length; j++) {
  acc[j].addEventListener("click", function() {
    this.classList.toggle("FAQ_active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

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