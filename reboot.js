'use strict';

const button = document.getElementById('btn');
const register = document.getElementById('register-account');

button.addEventListener('click', function (e) {
    const x = e.clientX;
    const y = e.clientY;

    // Ripple click area test, getting x & y button position
     const ButtonTop = e.target.offsetTop;
     const ButtonLeft = e.target.offsetLeft;
     console.log(ButtonTop, ButtonLeft);

     const xInside = x - ButtonLeft;
     const yInside = y - ButtonTop;
     
     const span = document.createElement('span');
     span.classList.add('ripple-effect');
     span.style.top = yInside + "px";
     span.style.left = xInside + "px";
     button.appendChild(span);
     window.location.href = "public/explore.html";

     setTimeout (() => span.remove(), 1000);
});

register.addEventListener('click', function (e) {
    const x = e.clientX;
    const y = e.clientY;

    // Ripple click area test, getting x & y button position
     const ButtonTop = e.target.offsetTop;
     const ButtonLeft = e.target.offsetLeft;
     console.log(ButtonTop, ButtonLeft);

     const xInside = x - ButtonLeft;
     const yInside = y - ButtonTop;
     
     const span = document.createElement('span');
     span.classList.add('ripple-effect');
     span.style.top = yInside + "px";
     span.style.left = xInside + "px";
     register.appendChild(span);
     window.location.href = "public/create.html";

     setTimeout (() => span.remove(), 1000);
});