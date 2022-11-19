
var nav = document.querySelector('nav');
//navbar color change
window.addEventListener('scroll', function () {
    //Faire défiler le contenu de 100 pixels, cette animation commence
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-light', 'shadow');
    } else {
        nav.classList.remove('bg-light', 'shadow');
    }
});

// scroll and arrow appears
window.addEventListener('scroll', function () {
    //this.console.log(window.scrollY);

    if (window.scrollY > 500) {
        document.getElementById('back-to-top').style.display = 'block';
    } else {
        document.getElementById('back-to-top').style.display = 'none';
    }

});




