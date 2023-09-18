<?php
    $msg = "";

    if (isset($_POST['submit'])) {
        $movie_name = $_POST['movie_name'];
        $email = $_POST['email'];
        $show = $_POST['show1'];
        $date = $_POST['date'];
        $no = $_POST['no'];

        if (empty($movie_name) || empty($email) || empty($show) || empty($date) || empty($no)) {
            $msg = "All fields are required.";
            exit(0);
        }else {
            if ($no<2 || $no>5) {
                $msg = "Enter between 2 and 5";
                exit(0);
            }
            $msg = "Booked successfully!";
         }
$conn = mysqli_connect("localhost","root","","movie");

if($conn === false){
    die("ERROR".mysqli_connect_error());
}



$sql="INSERT INTO movies VALUES('$movie_name','$email','$show','$date', '$no')";

if(mysqli_query($conn, $sql)){
    echo "data stored in a database successfully." ; 

    echo nl2br("\n $movie_name\n $email\n "
        . "$show\n $date \n $no" );

} else{
    echo "ERROR: $sql. " 
        . mysqli_error($conn);
}
mysqli_close($conn);
    }

?>
