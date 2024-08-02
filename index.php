<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    // Read the contents of the HTML file
    $htmlContent = file_get_contents('index.html');
    
    // Output the HTML content
    echo $htmlContent;
});

$app->run();
