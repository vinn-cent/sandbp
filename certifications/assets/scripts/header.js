/**
 * ASSIGN THE ACTIVE TO THE ACTIVE NAV LINK
 */
// alert("im ready to work for you");
const currLocation= location.href;
const menuItem= document.querySelectorAll('#navigation a');
const menuLength= menuItem.length;
for(let i= 0; i < menuLength; i++)
{
    if(menuItem[i].href === currLocation)
    {
        menuItem[i].className = 'activatedLinky';
    }
}

// javascript for the accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
    } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    } 
});
}
// endof javascript for the accordion


