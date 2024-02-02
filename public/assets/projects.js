var imageData = [
    { url: 'src/logo.png', url_2: 'src/hbcv.png', description: 'Healthy Broiler Chicken Verifier System or HBCV is mobile application inegrated with image classifier model. This enables users to determine the disease of a broiler using fecal image' },
    { url: 'src/nlp.gif', url_2: 'src/nlp-web.png',description: 'Yellow Page Language AI is a web-base applicationdevelop using Python and Flask. Users can generate statements using the AI model.' },
    { url: 'src/gan.png', url_2: 'src/gan-web (2).png',description: 'Face Generator is a web-based application, which enables the user to generate real human faces.' },
    { url: 'src/ems-1.png', url_2: 'src/ems-mock.png',description: 'Employee Management System is an HR web application that can be use for managing teams, monitoring employees, and other HR related processes.' },
    // Add more image URLs and descriptions as needed
];

// Reference to the image container and overlay
var imageContainer = document.getElementById('imageContainer');
var overlay = document.getElementById('overlay');
var overlayImage = document.getElementById('overlayImage');
var overlayDescription = document.getElementById('overlayDescription');

// Loop through the array and create img elements
imageData.forEach(function(imageData) {
    var imgElement = document.createElement('img');
    imgElement.src = imageData.url;
    imgElement.addEventListener('click', function() {
        showOverlay(imageData);
    });
    imageContainer.appendChild(imgElement);
});

function showOverlay(imageData) {
    overlayImage.src = imageData.url_2;
    overlayDescription.textContent = imageData.description;
    overlay.style.display = 'flex';
}

overlay.addEventListener('click', function() {
    overlay.style.display = 'none';
});

function closeOverlay() {
    document.getElementById('overlay').style.display = 'none';
}