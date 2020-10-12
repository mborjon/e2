<?php

session_start();

$results = $_SESSION['results'];

//$haveAnswer = $_SESSION['results']['haveAnswer'];
//$correct = $_SESSION['results']['correct'];

extract($results);

require 'done-view.php';