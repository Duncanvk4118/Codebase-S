<?php

$v = readLine("Wil je in " . "Meter (M)" . " of in Centimeter (CM)? Hoofdletter gevoelig! ");

if ($v == "M" || $v == "Meter"){
    $l = readLine("Wat is de lengte van de vierkant? in CM ");
    $b = readLine("Wat is de breedte van de vierkant? in CM ");

    $c = $l * $b;
    echo $c / 100 . "M2";   
} 
elseif ($v == "CM" || $v == "Centimeter") {
    $l = readLine("Wat is de lengte van de vierkant? in CM ");
    $b = readLine("Wat is de breedte van de vierkant? in CM ");

    $c = $l * $b;
    echo $c . "CM2";  
} else {
    echo "Geen geldige eenheid!";
}


?>