'use strict';

const modal = document.querySelector('#modal');

modal.addEventListener('click', (event) => {
    console.log(event.target.className);
    if ((event.target.classList.contains('modal-close')) || (event.target.classList.contains('modal-background'))) {
        modal.classList.remove('is-active');
    };
});
