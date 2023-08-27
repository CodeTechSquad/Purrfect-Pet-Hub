import { collections, services, blogs, aboutImages } from './data.js';

/** About section rendering **/
let aboutImagesContainer = document.querySelector('.about-left');

aboutImages.forEach((image) => {
    let aboutImage = document.createElement('img');
    aboutImage.src = image.img;
    aboutImage.alt = image.title;
    aboutImage.classList.add('about-image-border', image.title);
    aboutImagesContainer.appendChild(aboutImage);
});

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

/** Collections rendering **/
let collectionsCards = document.querySelector('.collections-cards');

collections.forEach((collection) => {
    let collectionCard = document.createElement('div');
    collectionCard.classList.add('collection-card');

    let collectionImg = document.createElement('img');
    collectionImg.src = collection.img;
    collectionImg.alt = collection.title;

    let collectionDetailsContainer = document.createElement('div');
    collectionDetailsContainer.classList.add('collection-details-container');

    let collectionTitle = document.createElement('h3');
    collectionTitle.innerHTML = collection.title;

    let collectionTextSpan = document.createElement('span');
    collectionTextSpan.classList.add('collection-text-span');

    let genderTitle = document.createElement('span');
    genderTitle.textContent = 'Gender: ';

    let ageTitle = document.createElement('span');
    ageTitle.textContent = 'Age: ';

    let genderValue = document.createElement('span');
    genderValue.classList.add('value-label');
    genderValue.textContent = collection.gender;

    let ageValue = document.createElement('span');
    ageValue.classList.add('value-label');
    ageValue.textContent = collection.age;

    let genderSpan = document.createElement('span');
    genderSpan.appendChild(genderTitle);
    genderSpan.appendChild(genderValue);

    let ageSpan = document.createElement('span');
    ageSpan.appendChild(ageTitle);
    ageSpan.appendChild(ageValue);

    collectionTextSpan.appendChild(genderSpan);
    collectionTextSpan.appendChild(ageSpan);

    collectionDetailsContainer.appendChild(collectionTitle);
    collectionDetailsContainer.appendChild(collectionTextSpan);

    collectionCard.appendChild(collectionImg);
    collectionCard.appendChild(collectionDetailsContainer);

    collectionsCards.appendChild(collectionCard);
});

/** Blogs section rendering **/
let blogContentContainer = document.querySelector('.blog-content-container');

blogs.forEach((blog) => {
    let blogContent = document.createElement('div');
    blogContent.classList.add('blog-content');

    let blogImg = document.createElement('img');
    blogImg.src = blog.img;
    blogImg.alt = blog.title;

    let blogTitle = document.createElement('h2');
    blogTitle.innerHTML = blog.title;

    let blogText = document.createElement('p');
    blogText.innerHTML = blog.text;

    let blogLink = document.createElement('a');
    blogLink.href = blog.link;
    blogLink.target = '_blank';

    blogContent.appendChild(blogImg);
    blogContent.appendChild(blogTitle);
    blogContent.appendChild(blogText);
    blogContent.appendChild(blogLink);

    blogLink.appendChild(document.createTextNode('View Details'));

    blogContentContainer.appendChild(blogContent);
});