<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T & D Creative Indonesia</title>
    <link rel="shortcut icon" href="assets/img/logo.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    class="column-3"
</head>

<body>
    <div id="first">
        <div id="header">
            <img id="logo" src="assets/img/logo.png" alt="Logo of T & D Creative Indonesia">
            <div id="menu">
                <img src="assets/img/icon/image.png" id="nav-icon" alt="nav-icon" onclick="toggleMenu();">
                <div id="menu-text" onclick="toggleMenu();">Menu</div>
                <div class="content" id="menu-3">
                    <a class="column-3" href="#first" onclick="return smoothScroll('first')">Home</a>
                    <a class="column-3 column-3-mid" href="#second" onclick="return smoothScroll('second')">Creation</a>
                    <a class="column-3" href="#third" onclick="return smoothScroll('third')">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="content">
            <div id="box">
                <h1>Welcome To<br>T & D Creative Indonesia</h1>
                <a href="#second">Our Creation</a>
            </div>
        </div>
    </div>

    <div id="second">
        <div class="content">
            <h2>Our Creation</h2>
            <div class="column-3">
                <a href="#">
                    <div class="every_img">
                        <img src="assets/img/post/prev1.PNG" alt="Preview of First Creation">
                        <p>First Creation Title</p>
                    </div>
                </a>
                <p class="description">Description of First Creation</p>
            </div>
            <div class="column-3 column-3-mid">
                <a href="#">
                    <div class="every_img">
                        <img src="assets/img/post/prev2.PNG" alt="Preview of Second Creation">
                        <p>Second Creation Title</p>
                    </div>
                </a>
                <p class="description">Description of Second Creation</p>
            </div>
            <div class="column-3">
                <a href="#">
                    <div class="every_img">
                        <img src="assets/img/post/prev3.PNG" alt="Preview of Third Creation">
                        <p>Third Creation Title</p>
                    </div>
                </a>
                <p class="description">Description of Third Creation</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div id="third">
        <div class="content">
            <h2>Our Contact</h2>
            <div class="column-2">
                <form action="" autocomplete="off" novalidate onsubmit="return validate(this)" method="POST">
                    <input type="text" name="name" placeholder="Name" autocomplete="disable">
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="message" cols="40" rows="8" placeholder="Your message"></textarea>
                    <input type="submit" value="Send" name="submit">
                </form>
            </div>
            <div class="column-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d253840.478949799!2d106.829518!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1614528144458!5m2!1sen!2sid" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div id="social">
        <div class="content">
            <h3>Our Instagram Feed</h3>
            <script src="assets/js/platform.js" defer></script>
            <div class="elfsight-app-b3772d10-658b-4db4-b9e1-026806e7a617"></div>
        </div>

        <div id="footer">
            <p>&copy; T & D Creative Indonesia - 2021</p>
        </div>
    </div>
    <script src="assets/js/wa.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>