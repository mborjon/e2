<?php

// Example head/tails
// Player A randomly picks a coin side - heads or tails.
// Create and array with two values - heads or tails
// $moves = ['heads', 'tails'];

// From this array, choose one of those values at random - set that to the Player A's "move"

// $playerA = $moves[rand(0, 1)];

//     if ($playerA == 'heads') {
//         $playerB = 'tails';
//     } else {
//         $playerB = 'heads';
//     }

// A coin is randomly “flipped”, “landing” on either heads or tails.
// Create a variable for coinflip and set it to also be a random value of heads or tails

// $coinFlip = $moves[rand(0, 1)];

// If the coin landed on the same side Player A chose, they win.
// Otherwise, Player B wins.
// Use an if statement and if the coinflip value matches player A's "move"
// then set the winner to be Player A
// Otherwise set the winner to be Player B


// if ($playerA == $coinFlip) {
//     $winner = 'Player A';
// } else {
//     $winner = 'Player B';
// }

// var_dump($playerA);
// var_dump($coinFlip);
// var_dump($winner);



// Project 1
// There is one pair of dice, each die has 6 sides, worth 1-6 depending on side landing up
$moves = ['1', '2', '3', '4', '5', '6'];

// Player A casts die 1 and it randomly lands with side 1-6 up
// Player B casts die 2 and it randomly lands with side 1-6 up

$playerAMove = $moves[rand(0, 5)];
$playerBMove = $moves[rand(0, 5)];

// var_dump($playerAMove);
// var_dump($playerBMove);

// A tie is declared if both players cast the same value
// Otherwise: If value of die 1 is greater than value of die 2, Player A wins. If value of die 2 is greater than value of die 1, Player B wins.

if ($playerAMove == $playerBMove) {
    $winner = 'neither, it is a tie';
} elseif ($playerAMove > $playerBMove) {
    $winner = 'Player A';
} elseif ($playerBMove > $playerAMove) {
    $winner = 'Player B';
}

require 'index-view.php';
