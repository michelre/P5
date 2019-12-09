<?php
require_once 'controller/FrontendController.php';
require_once 'controller/BackendController.php';


$frontendController = new FrontendController();
$backendController = new BackendController();

function checkAuthentication()
{
    if(!isset($_COOKIE['p5_authentification'])){
        header('Location: ?action=login');
        die();
    }
}

if (!isset($_GET['action'])) {
    $frontendController->home();
    die();
}

if ($_GET['action'] == 'admin') {
    checkAuthentication();
    $backendController->adminHome();
    die();
}


if ($_GET['action'] == 'login') {
    $frontendController->login();
    die();
}

if ($_GET['action'] == 'login_action') {
    $frontendController->loginAction($_POST['login'], $_POST['password']);
    die();
}

if ($_GET['action'] == 'logout') {
    $backendController->logout();
    die();
}
