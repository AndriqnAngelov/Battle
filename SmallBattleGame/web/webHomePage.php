<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="">
    <style>
        img {
            border-radius: 50%;
        }

        table td {
            text-align: center;
        }
    </style>
    <title>Battle Game</title>
</head>
<body background="pics/background.png">
<div align="center" style="color: red">
    <h1 style="color: red; border: solid ;border-radius: 70px">Battle Game</h1>
    <br>
    <form method="get" action="prepareBattle.php">
        <table align="centre">
            <tr>
                <th><img src="pics/arture.png" alt="Arture" style="width:150px"></th>
                <th><img src="pics/nasimoro.png" alt="Nasimoro" style="width:150px"></th>
                <th><img src="pics/riana.png" alt="Riana" style="width:150px"></th>
                <th><img src="pics/rubi.png" alt="Rubi" style="width:150px"></th>
            </tr>
            <tr>
                <td>Choose player</td>
                <td>Choose player</td>
                <td>Choose player</td>
                <td>Choose player</td>

            </tr>
            <tr>
                <td><input type="submit" name="arture" value="Arture" style="color: black; width: 100px; background-color: goldenrod"></td>
                <td><input type="submit" name="nasimoro" value="Nasimoro" style="color: black; width: 100px; background-color: goldenrod"></td>
                <td><input type="submit" name="riana" value="Riana" style="color: black; width: 100px; background-color: goldenrod"></td>
                <td><input type="submit" name="rubi" value="Rubi" style="color: black; width: 100px; background-color: goldenrod"></td>
        </table>
    </form>
    <br>
    <br>
    <br>
    <br>
    <h1 style="color: silver; border: solid ;border-radius: 70px">In this game each player has life points and attack
        points.
        When you select a player each time he will fill his life points and attack points at random.</h1>
</div>
</body>
</html>