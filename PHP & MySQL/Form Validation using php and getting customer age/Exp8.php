<?php
 $nameErr = $emailErr = $DOBErr = $phnoErr = $cardnoErr = $AddressErr = $AgreeErr = ""; 
 $name = $email = $DOB = $phno = $Cardno = $Address = $Agree = ""; 
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
 if (empty($_POST["DOB"])){
 $DOBErr = "DOB is required";
 } 
 else{
 $DOB = input_data($_POST["DOB"]);
 }
 if (empty($_POST["phno"])){
 $phno = "Phone number is required";
 } 
 else{
 $phno = input_data($_POST["phno"]); 
 if (!preg_match ("/^[0-9]*$/", $phno) ) { 
 $phno = "Only numeric value is allowed."; 
 } 
 if (strlen ($phno) != 10) { 
 $phnoErr = "Mobile no must contain 10 digits."; 
 } 
 }
 if (empty($_POST["Cardno"])){
 $cardnoErr = "Phone number is required";
 } 
 else{
 $Cardno = input_data($_POST["Cardno"]); 
 if (!preg_match ("/^[0-9]*$/", $Cardno) ) { 
 $cardnoErr = "Only numeric value is allowed."; 
 } 
 if (strlen ($Cardno) != 16) { 
 $cardnoErr = "Card no must contain 16 digits."; 
 } 
 }
 if (!isset($_POST['agree'])){ 
 $agreeErr = "Accept terms of services before submit."; 
 } else { 
 $agree = input_data($_POST["agree"]); 
} 
}
 function input_data($data) { 
 $data = trim($data); 
 $data = stripslashes($data); 
 $data = htmlspecialchars($data); 
 return $data; 
 } 
?>
