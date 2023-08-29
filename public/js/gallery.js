import { gallery } from "./data.js";

let galleryCards = document.querySelector('.gallery-cards');

gallery.forEach((gallery) => {
    let galleryCard = document.createElement('div');
    galleryCard.classList.add('gallery-card');

    let galleryImg = document.createElement('img');
    galleryImg.src = gallery.img;
    galleryImg.alt = gallery.title;

    galleryCard.appendChild(galleryImg);

    galleryCards.appendChild(galleryCard);
});