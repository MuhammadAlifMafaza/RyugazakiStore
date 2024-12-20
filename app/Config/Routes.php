<?php

use CodeIgniter\Router\RouteCollection;

// customer or user
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/products/(:num)', 'Products::view/$1');
$routes->get('/cart', 'Cart::index');
$routes->post('/cart/add', 'Cart::add');
$routes->get('/checkout', 'Checkout::index');
$routes->post('/checkout/process', 'Checkout::process');
$routes->get('/','User::index');

// admins
$routes->post('/login','User::autentikasi');
