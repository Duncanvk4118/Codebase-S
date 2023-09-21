<?php

$i = readLine("Typ your e-mail adress here: ");
$n = explode("@gmail.com", $i);

foreach ($n as $value) 
{
    echo $value;
}
?>