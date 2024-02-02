console.log("ok ");
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

