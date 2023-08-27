import { blogs } from './data.js';

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