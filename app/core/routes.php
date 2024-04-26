<?php
/**
 * File: routes.php
 *
 * Description: Contains route declarations for each page.
 */

// Initialize Router object
$router = new Router();

/**
 * Product page:
 * - index: Lists all products.
 * - show: Displays details of a single product.
 * - search: Displays the products found in the user search result.
 * - create: Creates a new product based on form submission.
 */
$router->registerRoute("GET", "", 'ProductController@index');
$router->registerRoute("GET", "/product/index", 'ProductController@index');
$router->registerRoute("GET", "/product/show/{id}", 'ProductController@show');
$router->registerRoute("GET", "/product/search/{terms}", 'ProductController@search');
$router->registerRoute("GET", "/product/create", 'ProductController@create');
$router->registerRoute("POST", "/product/create", 'ProductController@create');

/**
 * Courses page:
 * - index: Displays a calendar of all courses.
 * - fetch: Fetches courses based on a specific date.
 */
$router->registerRoute("GET", "/course/index", "CourseController@index");
$router->registerRoute("GET", "/course/fetch", "CourseController@fetch");
$router->registerRoute("GET", "/course/fetch/{date}", "CourseController@fetch");

/**
 * User page:
 * - login: Handles user login.
 * - signup: Handles user signup.
 */
$router->registerRoute("GET", "/user/login", "UserController@loginForm");
$router->registerRoute("POST", "/user/login", "UserController@login");
$router->registerRoute("GET", "/user/signup", "UserController@signupForm");
$router->registerRoute("POST", "/user/signup", "UserController@signup");

/**
 * Shopping Cart Page:
 * - index: Lists all items in the cart.
 * - add: Adds a product to the cart.
 * - remove: Removes a product from the cart.
 * - update: Updates the quantities of products in the cart.
 */
$router->registerRoute("GET", "/cart/index", 'CartController@index');
$router->registerRoute("GET", "/cart/add/{id}", 'CartController@add');
$router->registerRoute("GET", "/cart/remove/{id}", 'CartController@remove');
$router->registerRoute("POST", "/cart/update", 'CartController@update');

/**
 * Error Page:
 * - Currently unused but may have functionality in a later build.
 */
//$router->registerRoute("GET", "/error/{code}/{message}", "bypass");
