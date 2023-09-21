<?php

$a = readLine("(Deeltal) Typ a number here: ");
$b = readLine("(Deler) Typ a number here: ");

if($b % $a == 0)
{
    echo "De deler past in het deelgetal!";
} else {
    echo "De deler past niet in het deelgetal!";
}

?>