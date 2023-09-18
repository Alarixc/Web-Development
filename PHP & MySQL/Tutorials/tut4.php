<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="GET">

        
        <input type="text" name= "num" placeholder= "Enter your shit">
        <br>
        <button type="submit" name= "submit" >Submit</button>
</form>

    </div>
    <?php
    // $array = array("Daniel", "Jacob", "Whatever");
    // foreach ($array as $loopdata){
    //     echo "My name is " . $loopdata . "<br>";

    // }

    function calcsome($x){
        $result = 75/100 * $x;
        return $result;

    }

    if(isset($_GET['submit'])){
        $x = $_GET['num'];
        echo "75 of your ".$x .  " is " . calcsome($x);
    }



?>

</body>
</html>