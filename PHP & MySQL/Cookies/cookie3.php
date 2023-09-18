<?php
$cookie_name = "user";
$cookie_value = "COLOR";

setcookie($cookie_name, $cookie_value, time() - 86400 * 3);
if(count($_COOKIE)>0){
    echo($cookie_value);
}else{
    echo("Error, cookie not set");
}
?>
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
    <p>Welcome to my website</p>
    </div>

    <div>
        <a href="128.1.1.1">Click this link to browse for products</a> !-- Change ports if you want to --!
    </div>

    <script>
        var x = XMLHTTPRequest();
        var z = document.getElementById('name').value;
        // var y = document.getElementById('xml').innerHTML = "Do not deviate from the given instructions";

        function func(){
            if(this.readyState == 4){
                this.print = document.getElementById('name').value;
            }
        }

        function onreadystatechange(){
            alert("Ready state has changed");
        }

        x.send();

    </script>

</body>
</html>


