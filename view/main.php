<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magebit - Test 2021</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="base">
            <nav>
                <div class="nav-logo">
                    <img class="logo" src="images/Union.png" alt="Union" />
                    <img class="logo2" src="images/pineapple..png" alt="pineapple." />
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <h1 id="change_heading">Subscribe to newsletter</h1>
            <p id="change_text">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
            <form action="../index.php?op=register" method="post">
                <label class="input-label">
                    <input type="email" placeholder="Type your email address here..." name="email" id="email" required>
                    <button type="submit" id="submitbtn" name="signupbtn">
                        <img src="images/ic_arrow.svg" alt="arrow" class="arrow">
                    </button>
                </label>
                <label class="tos">
                    <input type="checkbox" name="chk_box" id="chk_box" required>
                    <span class="teksts">I agree to <u>terms of service</u></span>
                </label>
            </form>
            <div class="bottom-line"></div>
            <ul class="social-links">
                <li><a href="#"><img class="facebook icon" src="images/ic_facebook.svg"></a></li>
                <li><a href="#"><img class="instagram icon" src="images/ic instagram.svg"></a></li>
                <li><a href="#"><img class="twitter icon" src="images/ic_twitter.svg"></a></li>
                <li><a href="#"><img class="youtube icon" src="images/ic youtube.svg"></a></li>
            </ul>
        </div>
        <div class="image">
            <img src="images/image_summer.png" alt="image_summer">
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>