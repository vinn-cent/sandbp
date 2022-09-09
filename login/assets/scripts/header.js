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
        menuItem[i].className = 'activatedLink';
    }
}