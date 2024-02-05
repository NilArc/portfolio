<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absalon - Portfolio</title>
    <meta name="description" content="A set of animated ambient canvas backgrounds with different effects" />
    <meta name="keywords" content="canvas, ambient, background, animation, javascript, demo, web development" />
    <meta name="author" content="Codrops" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/base.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/me.css'); ?>" />
    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>

</head>

<body class="space">
    <header class="center-top">
        <nav>
            <ul>
                <li><a href="<?= base_url(''); ?>">Home</a></li>
                <li><a href="<?= base_url('me'); ?>">About Me</a></li>
                <li><a href="<?= base_url('contacts'); ?>">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="content content--canvas">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="content content--canvas">
                        <div class="profile-section">
                            <div class="diamond-container">
                                <img src="<?= base_url('assets/img/prof.png'); ?>" alt="Your Face Photo" class="diamond-photo">
                            </div>
                            <div class="description">
                                <h2 class="content__title">About Me</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mySlides fade">
                    <h2 class="content__title" id="tech_name">Hello I'm Arc</h2>
                    <p class="me_par">A dedicated student from West Visays State University
                        where I currently taking up Bachelor of Science in Computer Science</p>

                    <img src="" alt="">


                </div>

                <div class="mySlides fade" style="align-items: center; margin: 0 auto;">
                    <h2 class="content__title" id="intro_name">Technology Used</h2>
                    <div id="image-container" class="image-container-tech"></div>


                </div>

                <div class="mySlides fade">
                    <h2 class="content__title" id="intro_name">Projects</h2>
                    <p class="me_par"></p>
                    <div class="image-container" id="imageContainer"></div>

                    <div class="overlay" id="overlay">
                        <img id="overlayImage" alt="Overlay Image">
                        <p id="overlayDescription">This is the description</p><br><br>

                    </div>

                </div>

                <!-- Next and previous buttons -->
                <a class="prev" style="position: fixed;" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" style="position: fixed;" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->

        </div>
    </main>
    <script src="<?= base_url('assets/js/noise.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/util.js'); ?>"></script>
    <script src="<?= base_url('assets/js/me.js'); ?>"></script>
    <script src="<?= base_url('assets/js/projects.js'); ?>"></script>
    <!-- <script src="<?= base_url('assets/js/tech.js'); ?>"></script> -->

    <script>
        const images = ["<?= base_url('assets/img/html.png') ?>", "<?= base_url('/assets/img/css.png')?>",  "<?= base_url('/assets/img/js.png')?>",  "<?= base_url('/assets/img/py.png')?>", "assets/img/cpp.png", "assets/img/java.png", "assets/img/php.png", "assets/img/sql.png", "assets/img/xml.png"];

        const substitutes = ["HTML or Hypertext Markup Language", "CSS or Cascading Style Sheets", "JavaScript", "Python", "C++", "Java", "PHP", "SQL or Structured Query Language", "XML or eXtensible Markup Language"];
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
    </script>


</body>

</html>