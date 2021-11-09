<?php

function radToDeg($value){
    return $value * 180/pi();
}

function degToRad($value){
    return $value * pi()/180;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST['value'];
    $unit = $_POST['unit'];

    if(!strcmp($unit,"radian")){
        echo radToDeg($value) . ' degree';
    }
    else {
        echo degToRad($value) . ' radian';
    }
}

?>