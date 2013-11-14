<?php

/**
* Enable error reporting
*/
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

/**
* Set timezone
*/
date_default_timezone_set('Europe/Oslo');

/**
* Start session
*/
session_start();

/**
* Require autoloader
*/
require 'vendor/autoload.php';

/**
* Create new Slim app
*/
$app = new \Slim\Slim([
    'debug' => true,
    'view' => new \Telespinn\View()
]);

/**
* Define route: GET /
*/
$app->get('/', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Forside']);
    $app->render('index/top');
    $app->render('index/index');
    $app->render('index/footer');
});

/**
* Define route: GET /inspirasjon
*/
$app->get('/inspirasjon', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Inspirasjon']);
    $app->render('stories/index');
    $app->render('index/footer');
});

/**
* Define route: GET /nettbutikk
*/
$app->get('/nettbutikk', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Nettbutikk']);
    $app->render('store/index');
    $app->render('index/footer');
});

/**
* Define route: GET /min-side
*/
$app->get('/min-side', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Min side']);
    $app->render('profile/index');
    $app->render('index/footer');
});

/**
* Define route: GET /logg-ut
*/
$app->get('/logg-ut', function () use ($app) {
    $app->redirect('/');
});

/**
* Run app
*/
$app->run();
