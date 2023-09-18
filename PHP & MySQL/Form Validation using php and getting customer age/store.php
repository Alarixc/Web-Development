<?php
    
    $conn = mysqli_connect("localhost","root","","login");

    if($conn === false){
        die("ERROR".mysqli_connect_error());
    }

    $regno=$_REQUEST['email'];
    $name=$_REQUEST['name'];
    $DOB=$_REQUEST['DOB'];
    $email=$_REQUEST['email'];
    $phno= $_REQUEST['phno'];
    $Cardno= $_REQUEST['Cardno'];
    $Address= $_REQUEST['Address'];
    $Agree=$_REQUEST['Agree'];

    $sql="INSERT INTO logininfo VALUES('$name','$email','$DOB','$phno', '$Cardno', '$Address', '$Agree')";

    if(mysqli_query($conn, $sql)){
        echo "data stored in a database successfully." ; 

        echo nl2br("\n $name\n $email\n "
            . "$DOB\n $phno \n");
        echo nl2br("$Cardno\n $Address");

        //Storing data in a text file called Employee.txt
        $file = fopen("Employee.txt","w");
        fwrite($file, $name + "<br>" + $email + "<br>" +  )
        
    } else{
        echo "ERROR: $sql. " 
            . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    