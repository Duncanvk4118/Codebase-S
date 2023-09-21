<?php

$circel = readLine("Wat is de diameter van de circel: ");
echo "\n";

echo "De omtrek is: " . $circel * 2 * pi() . "\n";
echo "\n";

$circel = readLine("Wat is de oppervlakte van de circel: ");
echo "\n";

echo "De oppervlakte is: " . pi() * pow($circel,2) . "\n";
echo "\n";

echo "Hartelijk bedankt voor het invullen!";
?>