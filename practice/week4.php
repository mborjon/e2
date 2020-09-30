<?php
#           0       2
$moves = ['rock', 'paper', 'scissors']; #array of strings


$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

// echo $moves[0]; # 'rock'
// echo $moves[1];
// echo $moves[2];
// echo $moves[3]; # Notice: Undefined offset: 3
//var_dump($moves);

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber];

//var_dump($move);
# Associative arrays
/*
$coin_values = [
    'penny'=> .01,
    'nickel' => .05,
    'dime'  => .10,
    'quarter' => .25
];

$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' => 100,
    'quarter' => 34
]; */

//var_dump($coin_values['quarter']); #.25
//asort($coin_counts);
//arsort reverse alpha
//ksort by keys
//krsort reverse keys
//var_dump($coin_counts);

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9];
shuffle($cards);
//var_dump($cards);

$total = 0;

$coins = [
    'penny' => [100, .01],
    'nickel' => [25, .05],
    'dime' => [100, .10],
    'quarter' => [34, .25]
];
                        #key       value
// foreach($coin_counts as $coin => $count) {
    //
    // $total = $total + ($count * $coin_values[$coin]);
// }
// foreach($coins as $coin => $info){

    // $total = $total + ($info[0] * $info[1]);
// }

// var_dump($total);

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]; #define cards
shuffle($cards); #shuffle cards
$playerCards = array_splice($cards, 0, count($cards) / 2); #split in half
$computerCards = $cards;

//$playerDraw = $playerCards[count($playerCards) - 1];
$playerDraw = array_pop($playerCards);

// var_dump($playerCards);
// var_dump($playerDraw);

// var_dump(date('F j Y'));
// var_dump(strtolower('AbCDD'));
// var_dump(rand(0, 10));
// var_dump(());

#Coin Toss Game
$coin = ['heads', 'tails'];

#Player's Choice
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];

#Coin Flip
$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

if ($player1Choice == $flip) {
    // var_dump('Player 1 wins!');
} else {
    // var_dump('Player 1 lost');
}

#Rock Paper Scissors Game
// $moves = ['rock', 'paper', 'scissors'];
// $player1Move = $moves[rand(0, 2)];
// $player2Move = $moves[rand(0, 2)];

// var_dump($player1Move);
// var_dump($player2Move);

// if ($player1Move == $player2Move) {
//     var_dump('Tie');
// } elseif ($player1Move == 'rock' and $player2Move == 'paper') {
//     var_dump('Player 2 wins');
// } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
//     var_dump('Player 1 wins');
// }

#Loops
// use for each when working with arrays

// $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// foreach ($numbers as $key => $number) {
//     var_dump($number);
// }

// use when you iterating through a set number

//i = iterator
                    #i=i+1
// for ($i = 0; $i<=10; $i++) {
//     var_dump($i);
// }

// use while when you don't know how many guesses it's going to take

// i = 0;
// while ($i , 10) {
// var_dump($i);
// $i = $i + 1:
// }

// example game (suggested for project 1)
// $answer = 5; # use random in game
// $guess = null;

// while ($guess != $answer) {
//     $guess = rand(0, 10);
//     var_dump('Guess: ' . $guess);
// }

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


// Project 1 (test)
// There is one pair of dice, each die has 6 sides, worth 1-6 depending on side landing up
$moves = ['1', '2', '3', '4', '5', '6'];

// Player A casts die 1 and it randomly lands with side 1-6 up
// Player B casts die 2 and it randomly lands with side 1-6 up

$playerAMove = $moves[rand(0, 2)];
$playerBMove = $moves[rand(0, 2)];

// var_dump($playerAMove);
// var_dump($playerBMove);

// A tie is declared if both players cast the same value
// Otherwise: If value of die 1 is greater than value of die 2, Player A wins. If value of die 2 is greater than value of die 1, Player B wins.

if ($playerAMove == $playerBMove) {
    var_dump('Tie');
} elseif ($playerAMove > $playerBMove) {
    var_dump('Player A wins');
} elseif ($playerBMove > $playerAMove) {
    var_dump('Player B wins');
}
