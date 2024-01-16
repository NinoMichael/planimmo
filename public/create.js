'use strict'

const register = document.getElementById('btn-register');

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
     window.location.href = "signup.html";
});