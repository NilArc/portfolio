//var baseImageUrl = window.location.origin; // Replace 'your_base_url_here' with your actual base URL
var baseImageUrl = "";

//console.log(window.location.origin);
//console.log(baseImageUrl);

var imageData = [
    { url: 'assets/img/logo.png', url_2: '/assets/img/hbcv.png', description: 'Healthy Broiler Chicken Verifier System or HBCV is a mobile application integrated with an image classifier model. This enables users to determine the disease of a broiler using fecal images.' },
    { url: 'assets/img/nlp.gif', url_2:  '/assets/img/nlp-web.png', description: 'Yellow Page Language AI is a web-based application developed using Python and Flask. Users can generate statements using the AI model.' },
    { url: 'assets/img/gan.png', url_2: '/assets/img/gan-web (2).png', description: 'Face Generator is a web-based application that enables the user to generate real human faces.' },
    { url: 'assets/img/ems-1.png', url_2:  '/assets/img/ems-mock.png', description: 'Employee Management System is an HR web application that can be used for managing teams, monitoring employees, and other HR-related processes.' },
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
    imgElement.src = "" +imageData.url;
    console.log(imageData.url,imgElement.src);
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