<?php


include '../vendor/autoload.php';
//include '../src/Connect/Connect.php';
//include '../src/DataSource/DataSource.php';


$app  = new \Slim\App();

$app->get('/test', function ($request, $response,$args) {
       return $response->withStatus(200)->write('Hello World');

});

$app->get('/paitents',function ($request, $response,$args) {
$conn = new Connect();
$data = new DataSource($conn);

$paitents = $data->getAllPaitents;

if ($paitents) {
    $response = $response->withJson($paitents);

    return $response;

}

});

$app->run();
