<?php

//echo "0, 10, 20, 30, 40, 50, 60, 70, 80, 90";


/* echo 0;
echo ", ";
echo 10;
echo ", ";
echo 20;
echo ", ";
echo 30;
echo ", ";
echo 40;
echo ", ";
echo 50;
echo ", ";
echo 60;
echo ", ";
echo 70;
echo ", ";
echo 80;
echo ", ";
echo 90; */

//echo 0 . ", " . 10 . ", " . 20 . ", " . 30 . ", " . 40 . ", " . 50 . ", " . 60 . ", " . 70 . ", " . 80 . ", " . 90;

$c = 0;

for ($i=0; $i < 10; $i++) { 
    if ($i <= 8 ){
    echo $i * 10 . ", ";
    } else {
        echo $i * 10 . " ";
    }
}
?>