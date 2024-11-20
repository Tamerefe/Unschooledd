<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require 'views/home.php';
        break;
    case '' :
        require 'views/home.php';
        break;
    case '/about' :
        require  'views/about.php';
        break;
    case '/blog' :
        require  'views/blog.php';
        break;
    case '/waitlist' :
        require  'views/waitlist.php';
        break;
    case '/pricing' :
        require  'views/pricing.php';
        break;
    case '/contact' :
        require  'views/contact.php';
        break;
    case '/app' :
        require  'views/app.php';
        break;
    default:
        http_response_code(404);
        require 'views/404.php';
        break;
}

?>