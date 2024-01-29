'use strict';

const panels = document.querySelectorAll('.panel');

customCarousel();

function customCarousel() {
    setTimeout(() => {
        panels[0].classList.remove('active');
        panels[1].classList.add('active');
            setTimeout(() => {
                panels[1].classList.remove('active');
                panels[2].classList.add('active');
                    setTimeout(() => {
                        panels[2].classList.remove('active');
                        panels[3].classList.add('active');
                        setTimeout(() => {
                            panels[3].classList.remove('active');
                            panels[4].classList.add('active');
                            setTimeout(() => {
                                panels[4].classList.remove('active');
                                panels[0].classList.add('active');
                                customCarousel();
                            }, 7000);
                        }, 7000);
                    }, 7000);
            }, 7000);
    }, 7000);
}

const myMap = L.map('carte').setView([-18.805852, 47.471103], 50);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', 
  {attribution: '&copy; <a href= "https://www.openstreetmap.org/copypright">OpenStreetMap</a> contributors'}).addTo(myMap);

const markerIcon = L.icon({
    iconUrl: 'image/map-marker.png',  
    iconSize: [40, 40],
});

const marker = L.marker([-18.805852, 47.471103], { icon: markerIcon }).addTo(myMap)
  .openPopup();



