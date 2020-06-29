<?php
$route = $_GET['route'];

if (isset($_GET['route'])) {
    include($_GET['route'] . ".php");
} else {
    include("home.php");
}