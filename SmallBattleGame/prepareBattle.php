<?php
session_start();
require_once "Clasis/Player.php";
require_once "Clasis/SmallBattle.php";
$allPlayers = [0 => "Arture", 1 => "Nasimoro", 2 => "Riana", 3 => "Rubi"];
if (isset($_GET['arture'])) {
    $selectedPlayer = $_GET['arture'];
} elseif (isset($_GET['nasimoro'])) {
    $selectedPlayer = $_GET['nasimoro'];
} elseif (isset($_GET['riana'])) {
    $selectedPlayer = $_GET['riana'];
} elseif (isset($_GET['rubi'])) {
    $selectedPlayer = $_GET['rubi'];
}
$player = new Player($selectedPlayer);
$cpu = new Player($allPlayers[rand(0, 3)]);
$cpu->checkCpu($player);
$_SESSION["selectedPlayer"] = $selectedPlayer;
$_SESSION["player"] = $player;
$_SESSION["cpu"] = $cpu;
require_once "web/webPrepareBattle.php";

if (isset($_GET['selectRounds']) || isset($_GET['noRound'])) {
    header("Refresh:0; url= battlePage.php");
}


