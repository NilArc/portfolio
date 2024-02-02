document.addEventListener('DOMContentLoaded', function() {
    const dynamicContent = document.getElementById('content__paragraph-1');
    const contentArray = ['Programmer', 'AI Developer', 'Web Development', 'Mobile App Developer'];
    let currentIndex = 0;

    function updateContent() {
        dynamicContent.textContent = contentArray[currentIndex];
        currentIndex = (currentIndex + 1) % contentArray.length;
        dynamicContent.style.animation = 'none';  // reset anim
        void dynamicContent.offsetWidth;  
        dynamicContent.style.animation = null;  
      }

    //2.5 sec
    setInterval(updateContent, 2500);

  });