<?php

if (isset($_GET['action'])) {
    include'controllers/cookie.php';
}


if (isset($_GET['page'])) {
    include_once "views/" . $_GET['page'] . ".php";
} else {
    include_once "views/home.php";
}

