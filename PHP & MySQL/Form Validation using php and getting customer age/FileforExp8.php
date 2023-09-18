<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Registration form</title>
</head>
<body>
<?php
include "Exp8.php" 
?>
<h2>Sign up Form</h2> 
<br><br> 
<form method="post" > 
 
 name: 
 <br><br>
 <input type="text" name="name"> 
 <span class="error"> <?php echo $nameErr; ?> </span> 
 <br><br> 
 E-mail: 
 <br><br>
 <input type="text" name="email"> 
 <span class="error"> <?php echo $emailErr; ?> </span> 
 <br><br>
 DOB:
 <br><br>
 <input type="date" name="DOB">
 <span class="error"> <?php echo $DOBErr; ?> </span> 
 <br><br>
 Phone no:
 <br><br>
 <input type="text" name="phno"> 
 <span class="error"> <?php echo $phnoErr; ?> </span> 
 <br><br>
 Card no:
 <br><br>
 <input type="text" name="Cardno"> 
 <span class="error"> <?php echo $cardnoErr; ?> </span> 
 <br><br>
 Address:
 <br><br>
 <input type="text" name="Address">
 <span class="error"> <?php echo $AddressErr; ?> </span> 
 <br><br>
 <br><br> 
 
 <input type="checkbox" name="Agree"> 
 <span class="error"> <?php echo $AgreeErr; ?> </span>
 I agree 
 <br><br>
 <button type="submit" formaction="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 Validate
 </button>
 <br><br>
 <button type="submit" formaction="store.php">
 Store data
 </button>
 <br><br>
</form>
</body>
</html>
