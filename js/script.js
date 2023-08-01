
// Изменение меню при скролле

var blockMenu = document.querySelector(".block-menu");
scrollPrev = 0;
var scrollThis = 150;

window.scroll(function() {
   var scrolled = window.scrollTop();
   
   if(scrolled == scrollThis) {
        blockMenu.classList.add('out');
   } else {
       blockMenu.classList.remove('out');
   }
});

// Появление меню мобильной версии при клике

var popUpMenuBlock = document.querySelector('.pop-up-menu');
var menuMiddle = document.querySelector('#mobile-menu');
var menuMain = document.querySelector('#header-menu');
var popUpMenu = document.querySelector('#pop-up-menu');

popUpMenuBlock.onclick = function() {
    if (menuMiddle.style.opacity == 0) {
        menuMiddle.style.display = 'flex';
        menuMiddle.style.opacity = '1';
    } else if (menuMiddle.style.opacity == 1) {
        menuMiddle.style.opacity = '0';
        menuMiddle.style.display = 'none';
    }

    popUpMenu.classList.toggle('fa-bars');
    popUpMenu.classList.toggle('fa-times');
}


function popUpShow() {
    if (window.innerWidth >= 774) {
        popUpMenuBlock.style.display = 'none';
    } else {
        popUpMenuBlock.style.display = 'block';
    }
}

// Отслеживание изменения ширины экрана

go();
window.addEventListener('resize', go);

function go() {
    if (document.documentElement.clientWidth >= 771) {
        if (menuMiddle.style.opacity == 1) {
            menuMiddle.style.opacity = '0';
            menuMiddle.style.display = 'none';
        }

        if (popUpMenu.classList.contains('fa-times')) {
            popUpMenu.classList.toggle('fa-times');
            popUpMenu.classList.toggle('fa-bars')
        } 
    }
}