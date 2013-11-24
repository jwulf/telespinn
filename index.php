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
* Define route: GET /om
*/
$app->get('/om', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Om Telespinn']);
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
* Define route: GET /inspirasjon/:id
*/
$app->get('/inspirasjon/:id', function () use ($app) {
    $app->redirect('/inspirasjon');
});

/**
* Define route: GET /butikk
*/
$app->get('/butikk', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Butikk']);
    $app->render('store/index');
    $app->render('index/footer');
});

/**
* Define route: GET /butikk/:id
*/
$app->get('/butikk/:id', function () use ($app) {
    $app->redirect('/butikk');
});

/**
* Define route: GET /kontakt
*/
$app->get('/kontakt', function () use ($app) {
    $app->redirect('/');
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
* Run app
*/
$app->run();
