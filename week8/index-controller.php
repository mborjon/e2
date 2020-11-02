<?php
session_start();

// require 'Number.php';
// require 'EvenNumber.php';
// require 'Debug.php';

require __DIR__.'/vendor/autoload.php';

use App\Debug;

#Define array of moves - used in the view to display each move
$moves = ['rock', 'paper', 'scissors'];

#Extract results from the session if they exist
$lastGame = $_SESSION['results']['lastGame'] ?? null;
$recentGames = $_SESSION['results']['recentGames'] ?? null;

# Clear the results of the lastGAme
$_SESSION['results']['lastGame'] = null;


//$game = new Game();

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
//App\Debug::dump($game->play('rock'));


// use E2\Number;
// use E2\EvenNumber;
// use E2\Debug;

// $example1 = new Number(21);
// var_dump($example1->isValid());

// $example2 = new EvenNumber(21);
// var_dump($example2->isValid());

// Debug::dump(['a', 'b', ['x', 'y', 'z']]);

// require 'Person.php';

// $person = new Person('John', 'Harvard', 45);

// $person = new Person('John', 'Harvard', 45);

// echo $person->firstName; # Should print "John"

// echo $person->getFullName(); # Should print "John Harvard"

// echo $person->getClassification(); # Should print "adult"