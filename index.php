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
* Configure ORM
*/
//ORM::configure('mysql:socket=/var/run/mysqld/mysqld.sock;dbname=telespinn');
//ORM::configure('username', 'vagrant');
//ORM::configure('password', 'vagrant');

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
    $app->render('index/index');
    $app->render('index/footer');
});

/**
* Define route: GET /inspirasjon
*/
$app->get('/inspirasjon', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Inspirasjon', 'hideHeader' => true]);
    $app->render('index/index');
    $app->render('index/footer');
});

/**
* Define route: GET /nettbutikk
*/
$app->get('/nettbutikk', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Nettbutikk', 'hideHeader' => true]);
    $app->render('index/index');
    $app->render('index/footer');
});

/**
* Define route: GET /min-side
*/
$app->get('/min-side', function () use ($app) {
    $app->render('index/header', ['pageTitle' => 'Min side', 'hideHeader' => true]);
    $app->render('index/index');
    $app->render('index/footer');
});

/**
* Run app
*/
$app->run();
