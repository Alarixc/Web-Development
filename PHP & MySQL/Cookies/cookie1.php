<?php
//setting the cookie with expiration date to one hour ago to delete it 
$cookie_name = "user";
$cookie_value = "COLOR";
echo("Name of cookie is ". $cookie_name . " and value of cookie is " . $cookie_value);
echo("<br>");
setcookie("user", "COLOR", time() - 3600);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20BAI1154_Cookie2</title>
</head>
<body>

<?php
if(count($_COOKIE)>0) {
    echo("Cookie 'user' was deleted");
    echo "<br>";
    echo "Cookies are disabled.";
} else {
echo "\n";
echo("Cookie 'user' was deleted ");
echo "<br>";
echo "Cookies are disabled.";
 
}
?>

</body>
</html>
