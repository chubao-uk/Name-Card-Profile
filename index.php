<?php
$route = $_GET['page'];

if (isset($_GET['page'])) {

    $page = $_GET['page'];
    if (file_exists($page . ".php")) {

        include($page . ".php");
    } else {
        include("not-found.php");
    }
} else {

    $page = 'home';
    include("home.php");
}