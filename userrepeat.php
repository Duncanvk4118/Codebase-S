<?php

$b = readLine("Geef een begin getal: ");
$e = readLine("Geef een eind getal: ");

$c = $e - $b;

echo $c . "\n";
for ($i=0; $i <= $c ; $i++) { 
    echo ".";
}
?>