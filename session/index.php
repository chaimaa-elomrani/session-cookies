<?php
session_start();
if (isset($_GET['action'])) {
    // include_once "controllers/" . $_GET['action'] . ".php";
    include'controllers/authentification.php';
}


if (isset($_GET['page'])) {
    include_once "views/" . $_GET['page'] . ".php";
} else {
    include_once "views/home.php";
}

session_unset();

session_destroy();
