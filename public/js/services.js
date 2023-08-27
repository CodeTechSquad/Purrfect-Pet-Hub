import { services } from './data.js';

/** Services section rendering **/
let servicesCards = document.querySelector('.services-cards');

services.forEach((service) => {
    let serviceCard = document.createElement('div');
    serviceCard.classList.add('service-card');

    let serviceImg = document.createElement('img');
    serviceImg.src = service.img;
    serviceImg.alt = service.title;

    let serviceDetailsContainer = document.createElement('div');
    serviceDetailsContainer.classList.add('service-details-container');

    let serviceTitle = document.createElement('h3');
    serviceTitle.innerHTML = service.title;

    let serviceText = document.createElement('p');
    serviceText.innerHTML = service.text;

    let serviceLink = document.createElement('a');
    serviceLink.href = service.link;
    serviceLink.target = '_blank';

    serviceDetailsContainer.appendChild(serviceTitle);
    serviceDetailsContainer.appendChild(serviceText);
    serviceDetailsContainer.appendChild(serviceLink);

    serviceLink.appendChild(document.createTextNode('View More'));
    serviceCard.appendChild(serviceImg);
    serviceCard.appendChild(serviceDetailsContainer);
    servicesCards.appendChild(serviceCard);
});