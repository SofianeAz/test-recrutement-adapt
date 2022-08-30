



const mobileBtn = document.querySelector('.mobile-button');
const mobileMenu = document.querySelector('.menu-mobile');
let counter = 0;


mobileBtn.addEventListener('click', () => {
    counter === 0 ? mobileMenu.classList.add('active') : mobileMenu.classList.remove('active');
    counter === 0 ? mobileBtn.classList.add('active') : mobileBtn.classList.remove('active');
    counter === 0 ? counter++ : counter--;
})

const navItems = document.querySelectorAll('.nav-item');

navItems.forEach((e) => {
    e.addEventListener('click', () =>{
        counter === 0 ? mobileMenu.classList.add('active') : mobileMenu.classList.remove('active');
        counter === 0 ? mobileBtn.classList.add('active') : mobileBtn.classList.remove('active');
        counter === 0 ? counter++ : counter--;
    })
})