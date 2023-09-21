<?php

$age = readLine("Wat is je leeftijd? ");

if ($age <= 9 )
{
    echo "Je bent niet oud genoeg!";
    exit;
}
elseif ($age >= 118)
{
    echo "Zoek een kist uit! :)";
    exit;
}
elseif ($age == 10 || $age == 16 || $age == 18 || $age == 50 || $age == 67 || $age == 100)
{
    echo "Gefeliciteed denk ik..";
}
elseif ($age == 62)
{
    echo "Het duurt nog 5 jaar tot je een fossiel bent! :)";
}

?>