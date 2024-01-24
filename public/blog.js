'use strict';

const body = document.body;
const button2 = document.getElementById('btn2');
const register = document.getElementById('register');
const slide = document.getElementById('container-slide');
const cards = ["card1", "card2", "card3", "card4", "card5", "card6"].map(function(id) {
    return document.getElementById(id);
});
const prev = document.getElementById('prev-btn');
const next = document.getElementById('next-btn');
const getStarted = document.getElementById('start');
const exploreBtn = document.getElementById('explore-btn');

    button2.addEventListener('click', function (e) {
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
         button2.appendChild(span);
    });
    
    register.addEventListener('click', function (e) {
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
         window.location.href = "create.html";
    });

    getStarted.addEventListener('click', function (e) {
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
         getStarted.appendChild(span);
         window.location.href = "create.html";
    });

    //Card slide
    let i = 0;

    next.addEventListener('click', function() {
         carouselSlide(1);
         function carouselSlide(v) {
            i += v;
    
         if (i < 0) {
             i = cards.length - 1;
         } 
         const cardWidth = 570 / cards.length;
         const cardTranslate = (cardWidth * -1 * i);
         slide.style.transform = `translateX(${cardTranslate - 10}%)`;
         }
    });

    prev.addEventListener('click', function() {
        carouselSlide(-1);
        function carouselSlide(v) {
            i += v;
    
         if (i < 0) {
             i = cards.length - 1;
         } 
         const cardWidth = 570 / cards.length;
         const cardTranslate = (cardWidth * -1 * i);
         slide.style.transform = `translateX(${cardTranslate}%)`;
         }
   });

exploreBtn.addEventListener('click', function() {
    window.location.href = "explore.html";
})




   



