<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <link rel=stylesheet href="./css-files/styles_home.css">
    <link href="https://fonts.googleapis.com/css?family=Molle:400i|Pacifico|Manrope:wght@300|Righteous|Acme|Jost&display=swap" rel="stylesheet">
    <script src="./js-files/slideshow.js"></script>
</head>
<body>
    <center>
        <header class="Company">The Picture Patch</header>
            <ul class = "nav-bar">
                <li class = "nav-element nav-link"><a class = "nav-text" href = "home.php">Home</a></li>
                <li class = "nav-element nav-link"><a class = "nav-text" href = "gallery.php">Catalogue</a></li>
                <?php
                    if(isset($_SESSION["username"])){
                        echo '<li class = "nav-element nav-link"><a class = "nav-text" href = "profile.php">Dashboard</a></li>';
                        echo '<li class = "nav-element nav-link"><a class = "nav-text" href = "logout.php">Log Out</a></li>';
                    }
                    else{
                        echo '<li class = "nav-element nav-link"><a class = "nav-text" href = "signup.php">Sign Up/Log in</a></li>';
                    }
                ?>
            </ul>
        <div class="container">
            <div class="slideshow">
                <div class="slideshow-ele">
                  <img class = "mySlides" src="./images/Home/group-of-people-standing-inside-room-2608517.jpg">
                </div>
                <div class="slideshow-ele">
                    <img class = "mySlides" src="./images/Home/man-beside-flat-screen-television-with-photos-background-716276.jpg">
                </div>
                <div class="slideshow-ele">
                    <img class = "mySlides" src="./images/Home/beach-beach-wedding-chairs-clouds-169192.jpg">
                </div >
             </div>
            <div>
                <h3 class="we-are">Who are we?</h3>
                <p class="we-are-data">
                    With a few well-timed and angled clicks, a unique moment in time can be preserved forever. At The Picture Patch we bring you the best professional photographers from all over India to immortalise the most special, candid moments of your event.</p>
                <h3 class="we-do">What we do?</h3>
                <p class="we-do-data">
                    Great photographs are powerful enough to evoke long-lost feelings. Skilled professional photographers assure you beautifully poised bridal photos, humorous frames of kids’ photography and cutting edge fashion photography - just browse through our website to find what you need. Based on your needs, budget and location, you can go through India’s most comprehensive photographer’s directory to choose the perfect candid photographer for you. Pre-wedding photography, pre-wedding videography and couple photography are popular and The Picture Patch brings you connoisseurs in candid photography .
                </p>
            </div>
        </div>
    </center>
</body>
</html>
