<?php
require 'vendor/autoload.php';

$pastanga = new \Slim\Slim();
$pastanga->config(array(
    'debug' => \Classes\Config::getMode(),
    'templates.path' => \Classes\Config::getTemplatePath()
));

/**
 * main page route (aka index)
 */
$pastanga->get('/', function() use($pastanga){
    $pastanga->render('index.html'); 
});

$pastanga->run();
