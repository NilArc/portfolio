const images = ["src/html.png", "src/css.png", "src/js.png", "src/py.png", "src/cpp.png", "src/java.png", "src/php.png", "src/sql.png", "src/xml.png"];

const substitutes = ["HTML or Hypertext Markup Language", "CSS or Cascading Style Sheets", "JavaScript","Python", "C++","Java", "PHP", "SQL or Structured Query Language","XML or eXtensible Markup Language"];
const container = document.getElementById("image-container");

    // Loop through the array and create image elements with white circle background, substitute text, and hover text
    for (let i = 0; i < images.length; i++) {
      const containerDiv = document.createElement("div");
      containerDiv.classList.add("image-with-background");

      const imgElement = document.createElement("img");
      imgElement.src = images[i];
      imgElement.alt = substitutes[i]; // Use substitute text as alternative text
      imgElement.title = substitutes[i]; // Use substitute text as hover text

      const hoverText = document.createElement("div");
      hoverText.classList.add("hover-text");
      hoverText.textContent = substitutes[i];

      containerDiv.appendChild(imgElement);
      containerDiv.appendChild(hoverText);
      container.appendChild(containerDiv);
    }
