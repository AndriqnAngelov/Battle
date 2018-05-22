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
    <table align="center" cellspacing="10">
        <tr>
            <th><h1>You Chose - <img src="<?= $player->getPic(); ?>" align="left"
                                     style="width:170px"> <?= $player->getName(); ?></h1>
                <h1>Your Health is - <?= $player->getHealth(); ?></h1>
                <h1>Your Attack is - <?= $player->getAttack(); ?></h1>
            </th>
            <th>
                <h1>Your opponent is - <img src="<?= $cpu->getPic(); ?>" align="left"
                                            style="width:170px"> <?= $cpu->getName(); ?></h1>
                <h1>Opponent Health is - <?= $cpu->getHealth(); ?></h1>
                <h1>Opponent Attack is - <?= $cpu->getAttack(); ?></h1>
            </th>
        </tr>
    </table>
    <br>
    </form>
    <form method="get" action="battlePage.php">
        <h3 style="color: silver; border: solid ;border-radius: 70px;">You want to fight as long as
            some player's life points are over</h3>
        <input type="submit" name="noRound" value="Fight To The End "
               style="color: black; height: 40px ;width: 200px; background-color: goldenrod">
        <h3 style="color: silver; border: solid ;border-radius: 70px;">You want to fight certain rounds</h3>
        <input type="number" name="rounds"
               style="color: red; width: 100px; height: 20px; background-color: black"><br><br>
        <input type="submit" name="selectRounds" value="Select Rounds"
               style="color: black; height: 40px ;width: 110px; background-color: goldenrod">
    </form>
</div>
</body>
</html>