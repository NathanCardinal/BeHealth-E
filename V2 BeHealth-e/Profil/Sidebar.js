type="text/javascript"
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