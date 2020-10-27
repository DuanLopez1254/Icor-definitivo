<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';
include  '../Controllers/indexController.php';
$test = new indexController();
$test->index();