'use strict';

const body = document.body;
const filter = document.getElementById('filter');
const filterContainer = document.getElementById('filter-container');
const closeBtn = document.getElementById('close-button');
const sale = document.getElementById('saleOption');
const rent = document.getElementById('rentOption');

document.addEventListener('DOMContentLoaded', function() {
    filter.addEventListener('click', function() {
        filterContainer.classList.replace('invisible', 'visible');
    });
    
    closeBtn.addEventListener('click', function() {
        filterContainer.classList.replace('visible', 'invisible');
    });
});

