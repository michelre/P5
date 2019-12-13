<?php
require_once __DIR__ . '/vendor/autoload.php';
/*require_once 'controller/FrontendController.php';
require_once 'controller/BackendController.php';*/
use App\Controller\ApiController;
use App\Controller\BackendController;
use App\Controller\FrontendController;
use Klein\Klein;
$frontendController = new FrontendController();
$backendController = new BackendController();
$apiController = new ApiController();
$klein = new Klein();
/**
 * Définition des routes
 */
$klein->respond('GET', '/', function () use ($frontendController) {
    $frontendController->home();
});
$klein->respond('GET', '/login', function () use ($frontendController) {
    $frontendController->login();
});
$klein->respond('GET', '/logout', function () use ($backendController) {
    $backendController->logout();
});
$klein->respond('GET', '/admin', function () use ($backendController) {
    $backendController->adminHome();
    $backendController->deleteCustomerAction($_GET['customer_id']);
});
$klein->respond('GET', '/api/get-destinations', function ($request, $response) use ($apiController) {
    $response->json($apiController->getDestinations());
    die();
});
$klein->respond('POST', '/api/subscribe-customer', function ($request, $response) use ($apiController) {
    return $apiController->subscribeCustomer(/*params post*/);
});
$klein->respond('GET', '/public/[*]', function ($request, $response) {
    $file = __DIR__ . '/src' . $request->pathname();
    $mimeType = \MimeType\MimeType::getType($file);
    $response->header('Content-Type', $mimeType);
    return file_get_contents($file);
});
$klein->dispatch();
/*function checkAuthentication()
{
    if(!isset($_COOKIE['p5_authentification'])){
        header('Location: ?action=login');
        die();
    }
}*/
/*
if ($_GET['action'] == 'login_action') {
    $frontendController->loginAction($_POST['login'], $_POST['password']);
    die();
}
if ($_GET['action'] == 'logout') {
    $backendController->logout();
    die();
}*/