<?php

    
$conn = mysqli_connect("localhost","root","","employee");

if($conn === false){
    die("ERROR".mysqli_connect_error());
}

$empid=$_REQUEST['empid'];
$name=$_REQUEST['name'];
$salary=$_REQUEST['salary'];
$age=$_REQUEST['age'];
$qualification= $_REQUEST['qualification'];
$designation= $_REQUEST['designation'];


$sql="INSERT INTO Employee VALUES('$empid','$name','$salary','$age', '$qualification', '$designation')";

if(mysqli_query($conn, $sql)){
    echo "data stored in a database successfully." ; 

    echo nl2br("\n $empid\n $name\n "
        . "$salary\n $age \n"
    . "$qualification\n $designation \n");

      //Storing data in a text file called Employee.txt
      $file = "Employee.txt";
      file_put_contents($file, $empid . "\n" . $name . "\n" . $salary . "\n" . $age . "\n" . $qualification . "\n" . $designation . "\n\n", FILE_APPEND );
} else{
    echo "ERROR: $sql. " 
        . mysqli_error($conn);
}
mysqli_close($conn);
?>





