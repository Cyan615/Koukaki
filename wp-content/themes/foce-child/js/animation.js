console.log('go');

// Animation des titres de sections au scroll
const titles = document.querySelectorAll('.fadeTitle') 
const observer = new IntersectionObserver(entries => {
    console.log(entries);
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('fadeTitle'); 
            return;
        }
        
    });
});

titles.forEach(title => {
    observer.observe(title)
})


//effet parallaxe au scroll sur le logo
const parallax = document.querySelector('#site-logo');

window.addEventListener('scroll', () => {
    parallax.style.top = window.scrollY / 2 + "px";
})


// Carrousel des personnages avec effet cover flow: utilisation de Swiper js
const swiper = new Swiper(".main-character", {
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
    // pagination
    pagination: {
        el: '.swiper-pagination',
    },
    // navigation
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});

