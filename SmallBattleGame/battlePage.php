<?php
require_once "Clasis/SmallBattle.php";
session_start();
$rounds = $_GET['rounds'];
$a = $_SESSION['selectedPlayer'];
$player = $_SESSION['player'];
$cpu = $_SESSION['cpu'];
$battle = new SmallBattle($player, $cpu, $rounds);
$result = $battle->startBattle();
require_once "web/webBattlePage.php";

