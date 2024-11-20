AOS.init();

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
    content.style.maxHeight = null;
    this.childNodes[3].classList.remove("fa-minus")
    this.childNodes[3].classList.add("fa-plus")
    this.childNodes[3].style.backgroundColor = "transparent";
    this.childNodes[3].style.color = "black";
    } else {
    content.style.maxHeight = content.scrollHeight + "px";
    this.childNodes[3].classList.remove("fa-plus")
    this.childNodes[3].classList.add("fa-minus")
    this.childNodes[3].style.backgroundColor = "#FF6200";
    this.childNodes[3].style.color = "white";
    } 
});
}