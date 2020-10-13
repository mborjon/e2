<?php

session_start();

$choice = $_GET['choice'];

$moves = ['1', '2', '3', '4', '5', '6'];

$playerAMove = $moves[rand(0, 5)];
$playerBMove = $moves[rand(0, 5)];

if ($playerAMove == $playerBMove) {
    $tie = true;
} else {
    if ($playerAMove > $playerBMove) {
        $highRoller = 'Player A';
    } else {
        $highRoller = 'Player B';
    }

    if ($choice == $highRoller) {
        $winner = true;
    } else {
        $winner = false;
    }
}

$_SESSION['results'] = [
'choice' => $choice,
'playerAMove' => $playerAMove,
'playerBMove' => $playerBMove,
'winner' => $winner,
'highRoller' => $highRoller,
'tie' => $tie,
];

header('Location: index.php');