<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Complaints</title>
    <meta name="keywords" content="hospital, waste, rank">
    <meta name="description" content="Hospital Waste management Rankings">
    <link rel="stylesheet" href="./stylesheet/base.css">
    <script src="./script/base.js"></script>
</head>

<body onload="check_user()"><?php
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cnn = $_POST["cnn"];
  $msg = $_POST["message"];
  $user = $_COOKIE['user'];
  $cond=1;
  if(strlen($cnn) != 6){
      $err="CNN should be 6 digits";
      $cond=0;
  }
  if($cond == 1){
  $con = mysqli_connect("localhost","php_1014",""); 
mysqli_select_db($con,"rankit"); 
$sel = "select * from complaints order by comp_num DESC";
$sq=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($sq)){
    $comp_num = (int)$row['comp_num']+1;
}
else{
    $comp_num = 1001;
}
$sql='insert into complaints (comp_num, user_name, CNN, Complaint) VALUES ("'.$comp_num.'","'.$user.'","'.$cnn.'","'.$msg.'")';  
if ($con->query($sql) === TRUE) {
} else {
  $err = $con->error;
}
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
                        <a id="comp" href="" onclick="complaint()" class="current">Complaints</a>
                    </li>
                    <li>
                        <a id="login" href="login.php">Login</a>
                        <a id="username" style="display:none" href="" onclick="logout()"></a>
                    </li>
                    <li>
                        <a href="contact-us.php" >Contact Us</a>
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
                        Complaints
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4">
        <table class="outputTable" border=3 style="margin: auto;margin-bottom: 35px;text-align: center;">
            <tr style="font-size: 30;">
                <th>
                    Complaint Number
                </th>
                <th>
                    CNN
                </th>
                <th>
                    Time
                </th>
                <th>
                    Complaint
                </th>
                <th>
                    Status
                </th>
            </tr>
            <?php
                $user = $_COOKIE['user'];
  $con = mysqli_connect("localhost","php_1014",""); 
mysqli_select_db($con,"rankit"); 
$sel='select * from complaints where user_name = "'.$user.'"'; 
$sq=mysqli_query($con,$sel);  
while ($row=mysqli_fetch_array($sq)) 
{ 
    echo "<tr> <td> ".$row['comp_num']."</td> <td>".$row['CNN']."</td> <td>".$row['time']."</td> <td>".$row['Complaint']."</td> <td>".$row['status']."</td> </tr>";
} 
            ?>
        </table>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <table class="contact-us">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="name">Enter Hospital CNN:</label>
                                    </td>
                                    <td class="pl-5">
                                        <input type="text" class="myinput" name="cnn" id="cnn" placeholder="274829" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="message">Type Your Complaint:</label>
                                    </td>
                                    <td class="pl-5">
                                        <textarea rows="7" class="textarea" name="message" id="message" placeholder="Complaint..." required></textarea>
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
                                    <td>
                                        <input type="submit" onclick="send_response()" value="Send Complaint" class="button">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
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