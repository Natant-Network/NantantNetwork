<?php

// Import the Composer Autoloader to make the SDK classes accessible:
require 'vendor/autoload.php';

// Load our environment variables from the .env file:
(Dotenv\Dotenv::createImmutable(__DIR__))->load();

// Now instantiate the Auth0 class with our configuration:
$auth0 = new \Auth0\SDK\Auth0([
    'domain' => 'motortruck12212.us.auth0.com',
    //$_ENV['AUTH0_DOMAIN'],
    'clientId' => 'nS4igrC716Y8QGGpeIRcgiGgGRvZc3Kj',
    //$_ENV['AUTH0_CLIENT_ID'],
    'clientSecret' => 'v91jEmn0QgwHPpP6bZiJFxNP7UFvhrfo9tSfnUp-BbTEIZ9WTtlYjROj2WyIIsQM',
    //$_ENV['AUTH0_CLIENT_SECRET'],
    'cookieSecret' => 'llllllkaejxkducurjxkvdkfjhdhjkfsjkdjjjksrjfredj'
    //$_ENV['AUTH0_COOKIE_SECRET']
]);
// 👆 We're continuing from the steps above. Append this to your index.php file.

// Import our router library:
use Steampixel\Route;

// Define route constants:
//define('ROUTE_URL_INDEX', rtrim($_ENV['AUTH0_BASE_URL'], '/'));
define('ROUTE_URL_INDEX', rtrim('https://games.unblockedhaven.cf/login-test', '/'));
define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login');
define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/callback');
define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');
// 👆 We're continuing from the steps above. Append this to your index.php file.

Route::add('/', function() use ($auth0) {
  $session = $auth0->getCredentials();

  if ($session === null) {
    // The user isn't logged in.
    echo '<p>Please <a href="/login">log in</a>.</p>';
    return;
  }

  // The user is logged in.
  echo '<pre>';
  print_r($session->user);
  echo '</pre>';

  echo '<p>You can now <a href="/logout">log out</a>.</p>';
});
// ✋ We don't need to include this in our sample application, it's just an example.
$name = $session->user['name'] ?? $session->user['nickname'] ?? $session->user['email'] ?? 'Unknown';
// 👆 We're continuing from the steps above. Append this to your index.php file.

Route::add('/login', function() use ($auth0) {
    // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, should they hit network issues or other problems that interrupt a previous login process:
    $auth0->clear();

    // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
    header("Location: " . $auth0->login(ROUTE_URL_CALLBACK));
    exit;
});
// 👆 We're continuing from the steps above. Append this to your index.php file.

Route::add('/callback', function() use ($auth0) {
    // Have the SDK complete the authentication flow:
    $auth0->exchange(ROUTE_URL_CALLBACK);

    // Finally, redirect our end user back to the / index route, to display their user profile:
    header("Location: " . ROUTE_URL_INDEX);
    exit;
});
// 👆 We're continuing from the steps above. Append this to your index.php file.

Route::add('/logout', function() use ($auth0) {
    // Clear the user's local session with our app, then redirect them to the Auth0 logout endpoint to clear their Auth0 session.
    header("Location: " . $auth0->logout(ROUTE_URL_INDEX));
    exit;
});
//  We're continuing from the steps above. Append this to your index.php file.

// This tells our router that we've finished configuring our routes, and we're ready to begin routing incoming HTTP requests:
Route::run('/');
