<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign In</title>
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
  $nam = $_POST["name"];
  $mail = $_POST["Email"];
  $ph = $_POST["phone"];
  $cond=0;
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $err = "Invalid Email format";
      $cond=1;
    }
    if ($ph>9999999999 || $ph<1000000000) {
        $err = "Invalid Phone number format";
      $cond=1;
    }
$con = mysqli_connect("localhost","php_1014",""); 
mysqli_select_db($con,"rankit"); 
$sel='select * from login_details'; 
$sq=mysqli_query($con,$sel);  
$user_exist=0; 
while ($row=mysqli_fetch_array($sq)) 
{ 
 if($user == $row["username"]){ 
 $user_exist=1; 
 $err = "Username Already in use";
 break;
 } 
}
if($user_exist==0 && $cond==0) {
    $sql = "insert into user_details (username, fullname, email,phone_num) VALUES ('".$user."', '".$nam."', '".$mail."' , '".$ph."')";

if ($con->query($sql) === TRUE) {
} else {
  $err = $con->error;
}
$sql = "insert into login_details (username, password) VALUES ('".$user."', '".$pass."')";

if ($con->query($sql) === TRUE) {
} else {
  $err = $con->error;
}

$con->close();
setcookie("user", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
 header("Location: ./base.php");
}
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
                    <h1 class="text-center w-100">
                        Sign in
                    </h1>
                    <br /><br />
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <table class="contact-us">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="name">Enter Your Name:</label>
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
                                        <input type="number" class="myinput" name="phone" id="phone" placeholder="9828482922" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="name">Enter Your Username:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="username" id="username" placeholder="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="name">Enter Your Password:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="password" id="password" placeholder="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2 style="text-align : center">
                                        <input type="submit" onclick="" value="Sign In" class="button">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2 style="text-align : center">
                                        <a style="color:red" id="err">
                                            <?php
                                            echo $err;
                                            ?>
                                        </a>
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