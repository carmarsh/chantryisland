(function(){

var ham_but = document.querySelector(".hamburger-button");

ham_but.addEventListener("click", hamAnim, false);

function hamAnim() {
    this.classList.toggle("active");
}




})();
