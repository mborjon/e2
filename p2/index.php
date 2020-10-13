<?php

session_start();

//should create variables $choice, $playerAMove, $playerBMove, $tie, $highRoller, $winner
if (isset($_SESSION['results'])) {
    extract($_SESSION['results']);
    $haveResults = true;
} else {
    $haveResults = false;
}

$_SESSION['results']= null;

require 'index-view.php';