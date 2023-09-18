<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>J Comp</title>
    <meta name="keywords" content="hospital, waste, rank">
    <meta name="description" content="Hospital Waste management Rankings">
    <link rel="stylesheet" href="./stylesheet/base.css">
    <script src="./script/base.js"></script>
    
</head>

<body onload="check_user()">
    <header id="header">
        <div class="container">
            <a href="base.php" class="logo">
                Rank It
            </a>
            <nav class="menubar">
                <ul>
                    <li>
                        <a href="base.php" class="current">Home</a>
                    </li>
                    <li>
                        <a href="rankings.php">Rankings</a>
                    </li>
                    <li>
                        <a id="comp" href="" onclick="complaint()">Complaints</a>
                    </li>
                    <li>
                        <a id="login" href="login.php">Login</a>
                        <a id="username" style="display:none" href="" onclick="logout()"></a>
                    </li>
                    <li>
                        <a href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="banner">
        <div class="banner-details">
            <div class="container">
                <div class="row">
                    <h2>Welcome to our page</h2>
                    <h1>
                        A place to find Hospitals that are being mindful of earth
                    </h1>
                    <a href="contact-us.php" class="button">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <h2 class="heading">About us</h2>
                <p>
                    We, Rank it want to make everyone aware of importance of waste management
                    in Healthcare sector. So we have made a ranking of Hospitals based on their 
                    waste management methods. Also here you can raise an complaint, if any waste 
                    management norms are not followed by Healthcentres.
                </p>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-3">

        <div class="row">
            <h2 class="text-center heading">Gallery</h2>
        </div>

        <div class="col-33">
            <div class="row">
                <img src="./imgs/img1.jpg" alt="img" class="img-fluid" >
            </div>
        </div>

        <div class="col-33">
            <div class="row">
                <img src="./imgs/img2.jpg" alt="img" class="img-fluid" >
            </div>
        </div>

        <div class="col-33">
            <div class="row">
                <img src="./imgs/img3.jpg" alt="img" class="img-fluid" >
            </div>
        </div>
        <br />
    </div>

    <div class="text-center mb-5">
        <a href="./rankings.php" class="button">
            <span>View Rankings</span>
        </a>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <a href="https://facebook.com" target="_blank">
                            <img src="./imgs/facebook.png" alt="img" >
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com" target="_blank">
                            <img src="./imgs/instagram.png" alt="img" >
                        </a>
                    </li>
                    <li>
                        <a href="https://twiiter.com" target="_blank">
                            <img src="./imgs/twitter.png" alt="img" >
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </footer>
</body>

</html>