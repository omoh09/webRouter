<?php
require_once('./app/Request.php');
require_once('./app/Router.php');
require_once('./app/controller/profileController.php');

$router = new Router(new Request);

$router->get('/', function() {
  return <<<HTML
  <h1>Hello world</h1>
HTML;
});


// $router->get('/profile', function($request) {
//   return <<<HTML
//   <h1>Profile</h1>
// HTML;
// });

$router->get('/profile', profileController::myProfile);

$router->post('/data', function($request) {

  return json_encode($request->getBody());
});
