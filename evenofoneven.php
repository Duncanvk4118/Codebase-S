<?php

$number = readLine("Typ a number here: ");

function check($number)
{
    if ($number % 2 == 0) 
    {
        echo "Even";
    } else {
        echo "Odd";
    }
}

check($number);
?>