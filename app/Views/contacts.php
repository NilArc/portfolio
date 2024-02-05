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
		<link rel="stylesheet" type="text/css" href="base.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="contact.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
        
    </head>
	<body class="space">
        <header class="center-top">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="me.php" >About</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="content content--canvas">
                <div class="description">
                    <h2 class="content__title" id="contact_title">Contact Me</h2>
                </div>

                <div class="container">
                    <div class="box">
                        <a href="https://gmail.com" target="_blank"><img src="src/gmail.png" alt="Image 1" class="circle-img"></a>
                        <p class="description">arc.absalon@gmail.com</p>
                    </div>
                    <div class="box">
                        <img src="src/phone-call.png" alt="Image 2" class="circle-img">
                        <p class="description">+63 968 727 2783</p>
                    </div>
                    <div class="box">
                        <a href="https://www.facebook.com/arcnil.absalon/" target="_blank"><img src="src/facebook.png" alt="Image 3" class="circle-img"></a>
                        <p class="description">Arc Nil Absalon</p>
                    </div>
                    <div class="box">
                        <a href="https://www.linkedin.com/in/arc-nil-absalon-530a1a299/" target="_blank"><img src="src/linkedin.png" alt="Image 4" class="circle-img"></a>
                        
                        <p class="description">linkedin.com/in/arc-nil-absalon-530a1a299</p>
                    </div>
                </div>
                
            </div>
        </main>
        <script src="noise.min.js"></script>
        <script src="util.js"></script>
        <script src="swir.js"></script>
        
    </body>
</html>
