<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Funcs
    echo strlen("count this");
    echo "<br>";

    echo str_word_count("Sentence is this or whatever");
    echo "<br>";
    echo strrev("count this");
    echo "<br>";
    echo strpos("count this", "this");
    echo "<br>";
    echo str_replace("Daniel", "Jason", "Hi Daniel");
    echo "<br>";
    $var = array("Daniel", "Michael", "Jason");
    echo $var['1'];

    ?>

</body>
</html>
