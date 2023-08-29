import { collections } from './data.js';
let shops = collections;
// shops rendering
let shopsCards = document.querySelector('.shop-cards');

shops.forEach((shop) => {
    let shopCard = document.createElement('div');
    shopCard.classList.add('shop-card');

    let shopImg = document.createElement('img');
    shopImg.src = shop.img;
    shopImg.alt = shop.title;

    let shopDetailsContainer = document.createElement('div');
    shopDetailsContainer.classList.add('shop-details-container');

    let shopTitle = document.createElement('h3');
    shopTitle.innerHTML = shop.title;

    let shopTextSpan = document.createElement('span');
    shopTextSpan.classList.add('shop-text-span');

    let genderTitle = document.createElement('span');
    genderTitle.textContent = 'Gender: ';

    let ageTitle = document.createElement('span');
    ageTitle.textContent = 'Age: ';

    let genderValue = document.createElement('span');
    genderValue.classList.add('value-label');
    genderValue.textContent = shop.gender;

    let ageValue = document.createElement('span');
    ageValue.classList.add('value-label');
    ageValue.textContent = shop.age;

    let genderSpan = document.createElement('span');
    genderSpan.appendChild(genderTitle);
    genderSpan.appendChild(genderValue);

    let ageSpan = document.createElement('span');
    ageSpan.appendChild(ageTitle);
    ageSpan.appendChild(ageValue);

    shopTextSpan.appendChild(genderSpan);
    shopTextSpan.appendChild(ageSpan);

    shopDetailsContainer.appendChild(shopTitle);
    shopDetailsContainer.appendChild(shopTextSpan);

    shopCard.appendChild(shopImg);
    shopCard.appendChild(shopDetailsContainer);

    shopsCards.appendChild(shopCard);
});