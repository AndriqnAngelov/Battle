<?php
require_once "web/webHomePage.php";
if (isset($_GET['arture']) || isset($_GET['nasimoro']) || isset($_GET['riana']) || isset($_GET['rubi'])) {
    header("Refresh:0; url= prepareBattle");
}