/* Author: ANDRZEJ AMGHAR 2015
ALL RIGHTS RESERVED, WSZYSTKIE PRAWA ZASTRZEZONE */
var toggleBtn = document.createElement('div');
toggleBtn.className='toggle_nav'; 
toggleBtn.style.backgroundImage="url('menu.png)";

var rwdMenu = function() {
    var nav = document.getElementById('primary-menu');
    var refNode = document.getElementById('logo');
    refNode.parentNode.insertBefore(toggleBtn, refNode.nextSibling);    
    if(window.matchMedia('(max-width:844px)').matches) {
        nav.className = 'nav-menu mob';

        toggleBtn.style.display = 'block';
        toggleBtn.addEventListener('click', function() {
            if(nav.style.display=='block')
                nav.style.display='none';
            else
                nav.style.display = 'block';
        });
    }
    else {
        nav.className = 'nav-menu';
        toggleBtn.style.display='none';
    };    
};

window.onload = function() {rwdMenu();};
window.onresize = function() {rwdMenu();};