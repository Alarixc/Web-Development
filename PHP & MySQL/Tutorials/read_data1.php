<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="read.php" method = "post">
        <select name="selection[]" id="select" multiple>
            <option name = "option">Add</option>
            <option name = "option" >Subtract</option>
            <option name = "option" >Divide</option>
        </select>
        <input type="submit" value = "Send" name = "send" id= "send">
    </form>
</body>
</html>