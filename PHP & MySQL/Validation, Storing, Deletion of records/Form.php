<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>
<body>
<?php    
$nameErr = $emailErr = $gpaErr = $regnoErr = "";  
$name = $email = $gpa = $regno = "";  

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
     
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
        
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
     
    if (empty($_POST["gpa"])) {  

            $gpaErr = "GPA is required";  
    } else {  
            $gpa = input_data($_POST["gpa"]);  
            if (!preg_match ("/^[0-9]*$/", $gpa) ) {  
            $gpaErr = "Only numeric value is allowed.";  
            }  
        if ($gpa > 10) {  
            $gpaErr = "GPA cannot be greater than 10";  
            }  
    }    
    if (empty($_POST["regno"])) {  
        $regnoErr = "Regno is required";  
   } else {  
       $regno = input_data($_POST["regno"]);  
   }  
       
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>Sign up Form</h2>  
<br><br>  
<form method="post" >    
    
    Registration no:
    <br><br>
    <input type="text" name="regno">  
    <span class="error"> <?php echo $regnoErr; ?> </span>  
    <br><br> 
    name:  
    <br><br>
    <input type="text" name="name">  
    <span class="error"> <?php echo $nameErr; ?> </span>  
    <br><br>  
    GPA:
    <br><br>
    <input type="number" name="gpa">  
    <span class="error"> <?php echo $gpaErr; ?> </span>  
    <br><br> 
    E-mail:   
    <br><br>
    <input type="text" name="email">  
    <span class="error"> <?php echo $emailErr; ?> </span>  
    <br><br> 
    
    <button type="submit" formaction="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          Validate
    </button>
    <br><br>
    <button type="submit" formaction="test1.php">
        Store data
    </button>
    <br><br>
    <button type="submit" formaction="test2.php">
        Delete data
    </button>
</form> 
</body>
</html>
