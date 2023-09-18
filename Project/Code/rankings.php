<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rankings</title>
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
                        <a href="base.php" >Home</a>
                    </li>
                    <li>
                        <a href="rankings.php" class="current">Rankings</a>
                    </li>
                    <li>
                        <a id="comp" href="" onclick="complaint()" >Complaints</a>
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
                        Rankings
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4">
        <table class="outputTable" border=3 style="margin: auto;margin-bottom: 35px;text-align: center;">
            <tr style="font-size: 30;">
                <th>
                    Rank
                </th>
                <th>
                    CNN
                </th>
                <th>
                    Name
                </th>
                <th>
                    Address
                </th>
                <th>
                    Phone number
                </th>
                <th>
                    Score
                </th>
            </tr>
            <?php
            try {
                $con = mysqli_connect("localhost","php_1014",""); 
mysqli_select_db($con,"rankit"); 
$sel='select * from  ranks order by score DESC'; 
$sq=mysqli_query($con,$sel);  
$rank =0;
$temp_rank=0;
$before_score=0;

while ($row=mysqli_fetch_array($sq)) 
{ 
    // echo $before_score.floatval($row['score']);

    if ($before_score==floatval($row['score'])) {
        $temp_rank +=1;
    }
    else{
        $rank +=(1+$temp_rank);
        $temp_rank = 0;
    }
    echo "<tr> <td> ".$rank."</td> <td>".$row['CNN']."</td> <td>".$row['hosp_name']."</td> <td><a target='_blank' href='https://www.google.com/maps/search/?api=1&query=".$row['address']."/'>".$row['address']."</a></td> <td>".$row['phone_num']."</td> <td>".$row['score']."</td> </tr>";
    $before_score = $row['score'];
} 
            } catch (Throwable $th) {
                echo "";
            }
//   $con = mysqli_connect("localhost","php_1014",""); 
// mysqli_select_db($con,"rankit"); 
// $sel='select * from  ranks order by score DESC'; 
// $sq=mysqli_query($con,$sel);  
// $rank =0;
// $temp_rank=0;
// $before_score=0;

// while ($row=mysqli_fetch_array($sq)) 
// { 
//     // echo $before_score.floatval($row['score']);

//     if ($before_score==floatval($row['score'])) {
//         $temp_rank +=1;
//     }
//     else{
//         $rank +=(1+$temp_rank);
//         $temp_rank = 0;
//     }
//     echo "<tr> <td> ".$rank."</td> <td>".$row['CNN']."</td> <td>".$row['hosp_name']."</td> <td><a target='_blank' href='https://www.google.com/maps/search/?api=1&query=".$row['address']."/'>".$row['address']."</a></td> <td>".$row['phone_num']."</td> <td>".$row['score']."</td> </tr>";
//     $before_score = $row['score'];
// } 
            ?>
        </table>
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