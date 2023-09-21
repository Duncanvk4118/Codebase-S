<?php

$cijfer = readLine("Geef een cijfer voor dit vak: ");

if ($cijfer > 10) 
{
    echo "You can't do this!" . "\n";
}
elseif ($cijfer >= 5.5)
{
    echo "Gefeliciteerd!" . "\n";
}
else
{
    echo "Jammer!" . "\n";
}

$name = readLine("Wat is je naam? ");

if ($name == "Koos" or "Niemand") 
{
    echo "Ja koos.......";
}
else
{
    echo "NOUHOU :((((((";
}

?>