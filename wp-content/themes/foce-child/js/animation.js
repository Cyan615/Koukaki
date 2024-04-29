console.log('animations JS');  //**test la lecture du fichier */
// 

//ouverture du menu au clique
function menuToggle() {
    let navMenu = document.getElementById('burger');
    let btnMenu = document.querySelector('.navBar__burgerBtn');
    let closeItem = document.querySelectorAll('.item-close-burger'); 
 console.log('navMenu');
    navMenu.classList.toggle('open');
    btnMenu.classList.toggle('open');
    closeItem.classList.toggle('open');
   
}

/**
 * avoir la position de l'élément par rapport au haut de la page
 * @param {HTMLElement} element 
 * @return {number}
 */

function elementOffsetTop(element, emp = 0) {
    if (element.offsetParent) {
        return elementOffsetTop(element.offsetParent, emp + element.offsetTop);
    }
    return emp + element.offsetTop;
}


// Animation des titres de sections au scroll


const titles = document.querySelectorAll('.fadeTitle'); 
const observer = new IntersectionObserver((entries) => {
    // console.log(entries);
    const ratio = 0.7;
    entries.forEach(entry => {
        if (entry.isIntersecting) {
             entry.target.classList.remove('fadeTitle'); 
        }
            return;
    });{
        threshold: ratio
    }
});

titles.forEach(title => {
    observer.observe(title)
});


// Effet parallaxe au scroll =>
//** élement logo **
const titleLogo = document.querySelector('#site-logo');
const bigCloud = document.querySelector(".place__bigCloud");
const smallCloud = document.querySelector(".place__smallCloud");

let Xvalue = 0;
const root = document.documentElement;
let scrollY = window.scrollY;
// on écoute le 'scroll'
window.addEventListener('scroll', function ()  {
    titleLogo.style.top = scrollY / 2 + "px";

    

    let place = (document.getElementById('place')).offsetTop; //distance section par rapport au haut de la page
    
    let v = place+200;
    
    Xvalue = this.scrollY;
     
    if (Xvalue > v  && Xvalue < (v+400)) {
        //** valeur scroll **
        let t = Math.round(Math.max(-((Xvalue - place)/0.7),-400)) ;
        
        bigCloud.style.transform = `translateX(${t}px)`;
        smallCloud.style.transform = `translateX(${t}px)`;
        
    }
});



// Carrousel des personnages avec effet cover flow: utilisation de Swiper js
const swiper = new Swiper(".swiper", {
    //défilement continu
    autoplay:{
        delay:1000,
    },
    speed: 2000,
    effect:"coverflow",
    centeredSlider: true,
    // boucle
    loop: true,
    coverflowEffect:{
        rotate: 60,
        stretch: 0,
        // depth:100,
        slideShadows:false,
        modifier:1,
    },
    slidesPerView: '3',
        
});

