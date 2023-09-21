<?php

// $age = readLine("Wat is je leeftijd? " . "\n");

// $price = 12;

// if ($age <= 2)
// {
//     echo "Je ticket is gratis!" . "\n";
// }
// elseif ($age >= 3 && $age <= 16)
// {
//     $price = $price * 0.5;
//     echo "Je ticket is $price euro!" . "\n";
// }
// elseif ($age >= 17 && $age <= 64)
// {
//     echo "Je ticket is $price euro!";
// }
// elseif ($age >= 65)
// {
//     $price = $price * 0.75;
//     echo "Je ticket is $price euro!";
// }

$age = readLine("Wat is je leeftijd? " . "\n");
$price = 12;

if ($age <= 2)
{
    $price = 0;
}
elseif ($age >= 3 && $age <= 16)
{
    $price = $price * 0.5;
}
elseif ($age >= 65)
{
    $price = $price * 0.75;
}

if ($price == 0)
{
    echo "Je ticket is gratis!" . "\n";
}
else
{
    echo "Je ticket kost $price euro!" . "\n";
}

?>