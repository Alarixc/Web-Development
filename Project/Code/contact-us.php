<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="keywords" content="hospital, waste, rank">
    <meta name="description" content="Hospital Waste management Rankings">
    <link rel="stylesheet" href="./stylesheet/base.css">
    <script src="./script/base.js"></script>
    <script src="./script/contact.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
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
                        <a href="base.php" >Home</a>
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
                        <a href="contact-us.php" class="current">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="banner">
        <div class="banner-details">
            <div class="container">
                <div class="row">
                    <h1 class="text-center w-100">
                        Contact Us
                    </h1>
                    <br /><br />
                    <form >
                        <table class="contact-us">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="nam">Enter Your Name:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="name" id="name" placeholder="name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="Email">Enter Your Email Address:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="email" class="myinput" name="Email" id="Email" placeholder="me@gmail.com." required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="phone">Enter phone number:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="phone" id="phone" placeholder="9828482922" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="message">Type Your Message:</label>
                                    </td>
                                    <td class="pl-5">
                                        <textarea rows="7" class="textarea" name="message" id="message" placeholder="Message..." required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" onclick="send_response()" value="Send Message" class="button">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </div>
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