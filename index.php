<?php
// Define the base path of the application
define('BASE_PATH', __DIR__);


// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];

// Route the request to the appropriate part of the application
if ($requestUri == '/KDH-SriLankan-tours/' || $requestUri == '/') {
    // Default route (home page)
    require BASE_PATH . '/web/index.php';
} elseif (strpos($requestUri, '/web') === 0) {
    require BASE_PATH . '/web/index.php';
} elseif (strpos($requestUri, '/system') === 0) {
    require BASE_PATH . '/system/index.php';
} else {
    // Default action or 404 page
    echo "Page not found.";
}
