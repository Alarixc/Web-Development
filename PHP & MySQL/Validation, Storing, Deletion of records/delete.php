<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletion</title>
</head>
<body>
    <?php
$conn = mysqli_connect("localhost","root","","details");

if($conn === false){
    die("ERROR".mysqli_connect_error());
}
    $regno=$_REQUEST['regno'];
    

    $input = $_POST['regno'];
    $sql = "DELETE FROM student WHERE regno=$input";
    


    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
    
    
      mysqli_close($conn);

?>

</body>
</html>
