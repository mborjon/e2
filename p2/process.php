<?php

session_start();

$choice = $_GET['choice'];

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
///
$_SESSION['results'] = [
'choice' => $choice,
'roll' => $playerAMove,
'roll' => $playerBMove,
'winner' => $winner,
];

header('Location: index.php');