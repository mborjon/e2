<?php

session_start();

$choice = $_GET['choice'];

$moves = ['heads', 'tails'];
$flip = $moves[rand(0, 1)];

if ($choice == $flip) {
    $winner = true;
} else {
    $winner = false;
}

$_SESSION['results'] = [
'choice' => $choice,
'flip' => $flip,
'winner' => $winner,
];

header('Location: index.php');
// You picked: heads
// The coin landed on: heads
// You won the toss! :)

//require 'index-view.php';