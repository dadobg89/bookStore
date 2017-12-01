<?php
require_once 'config.php';
session_start();
$controller = isset($_GET['mvcc']) ? ($_GET['mvcc'].'Controller') : 'homeController';
$metod = isset($_GET['mvcm']) ? $_GET['mvcm'] : 'home';

$controller = new $controller;
$controller->$metod();
