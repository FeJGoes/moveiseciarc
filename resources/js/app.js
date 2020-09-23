require('./bootstrap');

window.animateHamburger = function() {
    let burgerSVG = document.getElementById('burger')

    burgerSVG.classList.toggle('active')
    setTimeout(() => {
        burgerSVG.classList.toggle('active')
    }, 1000)
}
