<!doctype html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Dice Roll</h1>

    <h2>Instructions</h2>
    <ul>
        <li>There is one pair of dice, each die has 6 sides, numbered 1-6, worth 1-6 depending on the side landing up.
        <li>Player A has die 1 and Player B has die 2.
        <li>Choose a side (Player A or Player B)
        <li>We'll roll the dice, and if the side you chose has the higher value, you win!
        <li>A tie is declared if both players roll the same value.
        </li>
    </ul>

    <form method='GET' action='process.php'>
        <input type='radio' name='choice' value='Player A' id='Player A' checked><label for='Player A'>Player A</label>
        <input type='radio' name='choice' value='Player B' id='Player B'><label for='Player B'>Player B</label>

        <button type='submit'>Roll</button>
    </form>

    <?php if ($haveResults) { ?>
    <h2>Results</h2>
    <ul>
        <li>You chose: <?php echo $choice ?>
        </li>
        <li>Player A throws a <?php echo $roll; ?>
        </li>
        <li>Player B throws a <?php echo $roll; ?>
        </li>
        <li>
            <?php if ($winner) { ?>
            Congratulations, you won!
            <?php } else { ?>
            Sorry, you lost, please try again.
            <?php } ?>
        </li>
    </ul>
    <?php } ?>

</body>

</html>