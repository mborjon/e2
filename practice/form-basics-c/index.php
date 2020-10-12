<?php
//handle session data
session_start();

// extract data from the session, *if* the session has the result otherwise assume we landed on the page fresh (i.e. form has not been submitted)
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    //  $haveAnswer = $results['haveAnswer'];
    //$correct = $results['correct'];
    extract($results);
} else {
    $results = false;
}
//clear session, reset game data so we can start fresh the next time the game is loaded
$_SESSION['results'] = null;

require 'index-view.php';