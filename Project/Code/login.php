<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="keywords" content="hospital, waste, rank">
    <meta name="description" content="Hospital Waste management Rankings">
    <link rel="stylesheet" href="./stylesheet/base.css">
    <script src="./script/base.js"></script>
</head>

<body onload="check_user()">
<?php
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $con = mysqli_connect("localhost","php_1014",""); 
mysqli_select_db($con,"rankit"); 
$sel='select * from login_details'; 
$sq=mysqli_query($con,$sel);  
$cond=0; 
while ($row=mysqli_fetch_array($sq)) 
{ 
 if($user == $row["username"] && $pass == $row["password"]){ 
 $cond=1; 
 setcookie("user", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
 header("Location: ./base.php");
 } 
} 
if($cond==0) $err = "Wrong Credentials"; 
} 

?>
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
                        <a id="login" href="login.php" class="current">Login</a>
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
                    <h1 class="text-center w-100">
                        Login
                    </h1>
                    <br /><br />
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <table class="contact-us">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="username">Enter Your Username:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="username" id="username" placeholder="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="password">Enter Your Password:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="password" id="password" placeholder="" required>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td colspan=2 style="text-align : center">
                                        <input type="submit" onclick="" value="Login" class="button">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2 style="text-align : center">
                                        <a id="err" style="color:red">
                                            <?php
                                            echo $err;
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2 style="text-align:center">
                                        <label>New user ? <a href="sign.php">Sign in</a></label>
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