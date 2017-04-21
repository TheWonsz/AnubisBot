<?php

/**
 * All your routes are defined here.
 * Use the router to define your routes.
 *
 * Routes can be defines in several ways
 *
 * $router->get() defines a GET request
 * $router->post() defines a POST request
 *
 * You can define a route's controller 2 ways
 * Either use just the controller/method as the
 * action, or define the action as an array.
 *
 * The controller action is defined by Controller@method
 *
 * Each route needs a URL to load, the first parameter
 * loads the URL, or the page to load
 *
 * The second parameter is the action
 */

// This route is a GET request for the index
// It's using the array action, calling the controller
// via the 'uses' index
$router->get('/', 'HomeController@getIndex');
$router->get('/0.4/{doc}', 'HomeController@getDoc');
