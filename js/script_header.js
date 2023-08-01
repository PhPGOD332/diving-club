var formBtn = document.querySelector(".header-btn"); 
var form = document.querySelector(".form-sign-up");
var close = document.querySelector(".close");
var signUpSubmit = document.querySelector(".sign-up-btn"); 
var telMask = document.querySelector(".sign-up-tel");

formBtn.onclick = function() {
    form.classList.remove('unvisible');
    form.className += ' visible';
    document.body.style.overflow = 'hidden';
}

close.onclick = function() {
    form.classList.remove('visible');
    form.className += ' unvisible';
    document.body.style.overflow = 'visible';
}
