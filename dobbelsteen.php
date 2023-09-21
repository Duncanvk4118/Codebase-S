<?php

$ai = rand(1,6);
$given = readLine("Geef een getal: ");

while ($given != $ai) {
    if ($given == "stop")
    {
        echo "You stopped the game!";
        break;
    } 
    elseif ($given != $ai)
    {
        echo "Try again" . "\n";
        $given = readLine("Geef een getal: ");
    }
}

if ($given == $ai)
{
    echo "You guessed the number!";
}

?>