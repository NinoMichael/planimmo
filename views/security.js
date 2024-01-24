'use strict'

const register = document.getElementById('register');
const contact = document.getElementById('contact');

register.addEventListener('click', function(e) {
    const x = e.clientX;
    const y = e.clientY;

    // Ripple click area test, getting x & y button position
    const ButtonTop = e.target.offsetTop;
    const ButtonLeft = e.target.offsetLeft;

    const xInside = x - ButtonLeft;
    const yInside = y - ButtonTop;

    const span = document.createElement('span');
    span.classList.add('ripple-effect');
    span.style.top = yInside + "px";
    span.style.left = xInside + "px";
    register.appendChild(span);
    window.location.href = "explore";
})

contact.addEventListener('click', function() {
    const x = e.clientX;
    const y = e.clientY;

    // Ripple click area test, getting x & y button position
    const ButtonTop = e.target.offsetTop;
    const ButtonLeft = e.target.offsetLeft;

    const xInside = x - ButtonLeft;
    const yInside = y - ButtonTop;

    const span = document.createElement('span');
    span.classList.add('ripple-effect');
    span.style.top = yInside + "px";
    span.style.left = xInside + "px";
    contact.appendChild(span);
    contact.style.transform = "scale(.95)";
    window.location.href = "blog";
})