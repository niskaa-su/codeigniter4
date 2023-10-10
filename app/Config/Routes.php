<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/about', 'Page::about');
// $routes->get('/contact', 'Page::contact');
// $routes->get('/faqs', 'Page::faqs');
// $routes->get('/', 'Buku::index');
// $routes->get('/', 'KategoriBuku::index');
// $routes->get('/', 'PinjamBuku::index');
$routes->setAutoRoute(true);