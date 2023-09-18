<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storing of Data</title>
</head>
<body>
    <?php
    
    $conn = mysqli_connect("localhost","root","","details");

    if($conn === false){
        die("ERROR".mysqli_connect_error());
    }

    $regno=$_REQUEST['regno'];
    $name=$_REQUEST['name'];
    $gpa=$_REQUEST['gpa'];
    $email=$_REQUEST['email'];

    $sql="INSERT INTO student VALUES('$regno','$name','$gpa','$email')";

    if(mysqli_query($conn, $sql)){
        echo "data stored in a database successfully." ; 

        echo nl2br("\n$regno\n $name\n "
            . "$gpa\n $email");
    } else{
        echo "ERROR: $sql. " 
            . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
