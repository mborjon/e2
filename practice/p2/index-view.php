<!DOCTYPE html>
<html lang="en">

<head>

    <title>Coin Flip</title>
    <meta charset="UTF-8">
    <link href=data:, rel=icon>

</head>

<body>

    <h1>Coin flip</h1>
    <h2>Instructions</h2>
    <ul>
        <li>Choose a side (heads or tails)</li>
        <li>We'll flip a coin and if it lands on your choice, you win!</li>
    </ul>

    <form method='GET' action='process.php'>
        <input type='radio' name='choice' value='heads' id='heads' checked><label for='heads'>Heads</label>
        <input type='radio' name='choice' value='tails' id='tails'><label for='tails'>Tails</label>

        <button type='submit'>Flip</button>
    </form>

    <?php if ($haveResults) { ?>
    <h2>Results</h2>
    <ul>
        <li>You chose: <?php echo $choice ?>
        </li>
        <li>The coin landed on <?php echo $flip; ?>
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