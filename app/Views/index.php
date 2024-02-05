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
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
        
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
                <h2 class="content__title" id="name">Arc Nil Absalon</h2>
                
                <p class="content__paragraph" id="content__paragraph-1" ></p>
                <p class="content__paragraph" style="top: 84%;"></p>
                <p class="content__paragraph" style="top: 88%;"></p>

            </div>
        </main>
        <script src="<?= base_url('assets/js/noise.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/util.js'); ?>"></script>
        
        <script>
    
    var chars = "!@#$%^&*_+-=;'/";
    function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function start() {
    var phrase = ['Programmer', 'AI Enthusiast', 'Web Developer','Backend Person',  'Mobile App Developer'];
    var container = "";

    while (1) {
        for (var m_index = 0; m_index < phrase.length; m_index++) {
            var max = phrase[m_index].length;
            var begin = 0;
            var end = max;

            while (begin < max) {
                var here = phrase[m_index];
                var sub = here.substring(0, begin + 1);
                container += sub;

                var temp = 0;
                while (temp < end - 1) {
                    container += chars[Math.floor(Math.random() * 14)];
                    temp++;
                }

                document.getElementById("content__paragraph-1").innerHTML = container; // Assuming chars array is defined somewhere
                await sleep(150);

                begin++;
                end--;

                container = "";
            }

            await sleep(5000);
        }
    }
}

start();

        </script>
    </body>
</html>
