<?php
$route = $_GET['page'];

if (isset($_GET['page'])) {
    include($_GET['page'] . ".php");
} else {
    include("home.php");
}