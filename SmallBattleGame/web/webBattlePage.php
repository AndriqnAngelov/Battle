<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            border-radius: 50%;
        }

        table th {
            text-align: center;
            border: 1px solid red;
        }
    </style>
    <title>Battle Game</title>
</head>
<body background="pics/background.png">
<div style="color: red" align="center">
    <h1 style="color: red; border: solid ;border-radius: 70px;">Battle Game</h1>
    <br>

    <?php if ($result == "Equal Battle"): ?>
        <h1 style='color: red'>Equal Battle</h1>
    <?php elseif ($result == $player->getName()): ?>
        <h1 style='color: red'>The Winner is: <?= $result; ?></h1>
        <h1><img src="<?= $player->getPic(); ?>" style="width:170px"></h1>
    <?php elseif ($result == $cpu->getName()): ?>
        <h1 style='color: red'>The Winner is: <?= $result; ?></h1>
        <h1><img src="<?= $cpu->getPic(); ?>" style="width:170px"></h1>
    <?php endif; ?>
    <br>
    <a href="index.php"><h1 STYLE="color: red">START A NEW GAME</h1></a>
</div>
</body>
</html>