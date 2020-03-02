const hamIcon = document.getElementById("hamburger-icon");
const mobileNav = document.getElementById('mobile-nav');
const overlay = document.getElementById('overlay');
const closeIcon = document.getElementById('close-icon');


console.log(prvBtn);
console.log(nxtBtn);

function openNav() {
    mobileNav.style = 'left: 0px';
    overlay.style.display = 'block';
}

function closeNav() {
    mobileNav.style = 'left: -1000px';
    overlay.style.display = 'none';
}

hamIcon.addEventListener('click', openNav);
closeIcon.addEventListener('click', closeNav);



