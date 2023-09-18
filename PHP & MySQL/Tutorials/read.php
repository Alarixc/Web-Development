<?php


if(isset($_POST['send'])){
        if(!empty($_POST['whatever'])){
        foreach($_POST['whatever'] as $selected){
            echo $selected, "<br>";
        }
    }else{
        echo "Nothing was selected";
    }
    }

    foreach($_POST['yes'] as $selected){
        echo $selected, "<br>";
    }


?>
