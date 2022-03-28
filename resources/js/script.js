// navbar button
const toggleBtn = document.getElementsByClassName('toggle-btn')[0]
const navLinks = document.getElementsByClassName('nav-links')[0]

toggleBtn.addEventListener('click', () => {
    navLinks.classList.toggle('active')
})

// scroll back to the top button
const scrollToTopBtn = document.querySelector(".top-btn");
const visibilityBtn = () => {
    
    if (document.documentElement.scrollTop <= 110) {
        scrollToTopBtn.style.display = 'none';
    } else {
        scrollToTopBtn.style.display = 'block';
    }
};

visibilityBtn(); // button not visible once page refreshed

scrollToTopBtn.addEventListener('click', () => {
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0; // safari browser
    });

    document.addEventListener('scroll', (e) => {
    visibilityBtn();
});

