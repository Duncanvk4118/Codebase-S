<?php

$naam = readLine("Geef namen: ");
$namen = explode(" ", $naam);

foreach ($namen as $value) {
  echo $value . "\n";
}
?>