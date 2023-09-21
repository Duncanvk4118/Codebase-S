<?php 

//Players
$plr1 = readLine("What is player 1's score?" . "\n");
$plr2 = readLine("What is player 2's score?" . "\n");

if ($plr1 > $plr2)
{
    echo "Player 1 has won with $plr1 points!" . "\n";
} else {
    echo "Player 2 has won with $plr2 points!" . "\n";
}

?>