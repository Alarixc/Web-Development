<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletion</title>
</head>
<body>
    <p>Delete the previous entries using employee id</p>
    <form method="GET">
        <label for="regno">Employee ID:</label>
        <input type="text" name="empid">
        <br><br>
        <button type="submit">
            Delete
        </button>
    <p>Employee picturer</p>
    <form method = "GET" action="pic.php">
        <input type="text" placeholder= "Enter the employee ID whose picture you wanna see">
        
    </form>
    </form>

<?php
$delete = $_GET['empid'];
$conn = mysqli_connect("localhost" , "root" , "", "employee");
if($conn == false){
    die("ERROR" . mysqli_connect_error());
}

$sql1 = "DELETE FROM Employee WHERE empid = $delete";

if ($conn->query($sql1) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

mysqli_close($conn);
?>



</body>
</html>