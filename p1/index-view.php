<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>Project 1</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>There is one pair of dice, each die has 6 sides, numbered 1-6, worth 1-6 depending on side landing up.
        <li>Player A picks die 1 and Player B picks die 2.
        <li>Player A throws die 1 and it randomly lands with side 1-6 up.
        <li>Player B throws die 2 and it randomly lands with side 1-6 up.
        <li>A tie is declared if both players cast the same value.
        <li>Otherwise: If the value of die 1 is greater than value of die 2, Player A wins. If the value of die 2 is
            greater than value of die 1, Player B wins.
        </li>
    </ul>
    <h2>Results</h2>
    <ul>
        <li>Player A throws a <?php echo $playerAMove; ?>
        </li>
        <li>Player B throws a <?php echo $playerBMove; ?>
        </li>
        <li>The winner is <?php echo $winner; ?>
        </li>
        </li>
    </ul>

</body>

</html>