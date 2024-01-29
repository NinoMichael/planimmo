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
