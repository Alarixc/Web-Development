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
        <form method = "get" >
            <input type="text" name="num1" id="num1" placeholder= "Number1">
            <input type="text" name="num2" id="num2" placeholder= "Number2">
            <select name="operator">
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>
        
        <?php
        if(isset($_GET['submit'])){
            $result;
            switch($_GET['operator']){
            case "Add":
                $result = $_GET['num1'] + $_GET['num2'];
                echo $result;
                break;
            case "Subtract":
                $result = $_GET['num1'] - $_GET['num2'];
                echo $result;
                break;

            }
        }
        
        ?>

    </div>




    
</body>
</html>