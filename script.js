function menuClick(menuItem) {
    alert(`You clicked on ${menuItem}`);
}

const banner = document.querySelector('.banner');
const images = [
    'url("slogan/slogan1.gif")',
    'url("slogan/slogan2.gif")',
    'url("slogan/slogan3.gif")'
];
let index = 0;

function changeBannerImage() {
    banner.style.backgroundImage = images[index];
    index = (index + 1) % images.length;
}

setInterval(changeBannerImage, 3000);
changeBannerImage();

document.addEventListener('DOMContentLoaded', function() {
    const feedbackElement = document.querySelector('.feedback');
    const email = feedbackElement.getAttribute('data-email');
    const hoverContent = document.createElement('div');
    hoverContent.className = 'hover-content';
    hoverContent.innerHTML = `We love to hear about your feedback about us at <a href="mailto:${email}" style="color: #20C997;">AlphaCore Intelligence</a>`;
    feedbackElement.appendChild(hoverContent);
});