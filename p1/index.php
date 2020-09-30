<?php

$moves = ['1', '2', '3', '4', '5', '6'];

$playerAMove = $moves[rand(0, 5)];
$playerBMove = $moves[rand(0, 5)];

if ($playerAMove == $playerBMove) {
    $winner = 'neither, it is a tie';
} elseif ($playerAMove > $playerBMove) {
    $winner = 'Player A';
} elseif ($playerBMove > $playerAMove) {
    $winner = 'Player B';
}

require 'index-view.php';
