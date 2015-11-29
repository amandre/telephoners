/* Author: ANDRZEJ AMGHAR 2015
ALL RIGHTS RESERVED, WSZYSTKIE PRAWA ZASTRZEZONE */

var rwdMenu = function() {
    var nav = document.getElementById('primary-menu');
    
    if(window.matchMedia('(max-width:844px)').matches) {
        nav.className = 'nav-menu mob';
        var toggleBtn = document.createElement('div');
        toggleBtn.className='toggle_nav';       
        var refNode = document.getElementById('logo');
        refNode.parentNode.insertBefore(toggleBtn, refNode.nextSibling);
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