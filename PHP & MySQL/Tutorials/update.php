<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <p>Update the salary using employee id</p>
    <form method="GET">
        <label for="regno">Employee ID:</label>
        <input type="text" name="empid">
        <br>
        <label for="sal">Updated Salary:</label>
        <input type="text" name = "sal">
        <br><br>
        <button type="submit">
            Update
        </button>
    </form>

<?php
$emp = $_GET['empid'];
$update = $_GET['sal'];
$conn = mysqli_connect("localhost" , "root" , "", "employee");
if($conn == false){
    die("ERROR" . mysqli_connect_error());
}

$sql2 = "UPDATE Employee SET salary = $update WHERE empid = $emp";

if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

mysqli_close($conn);
?>



</body>
</html>