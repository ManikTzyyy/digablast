import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();

const barButton = document.getElementById("menu-bars");
const mobileMenu = document.getElementById("mobile-menu");
const barIcon = document.querySelector(".icon-bar");

barButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("show");
    barIcon.classList.toggle("active");
});


window.addEventListener('scroll', ()=>{
    const navbar = document.getElementById('navbar')
    if(window.scrollY > 50){
        navbar.classList.add('bg-black')
    }else{
        navbar.classList.remove('bg-black')
    }
});

