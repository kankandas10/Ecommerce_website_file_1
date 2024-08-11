// Header on scroll color change
let Header = document.querySelector('header');

window.addEventListener('scroll', () =>{
    Header.classList.toggle('shadow',window.scrollY > 0);

})
// menu
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active'); 
    
}
//scroll-reaveal-animation
const sr = ScrollReveal({
    origin:'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset:true,
})


sr.reveal('specail-img',{origin: 'left'})
sr.reveal('.special-details',{origin: 'right'})
sr.reveal('.heading',{origin:'right'})
sr.reveal('.budsh',{delay: 200})
sr.reveal('budspe',{origin: 'right'})
sr.reveal('.buds-text',{origin: 'left'})
sr.reveal('.specialh',{delay: 200})

