<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/','User::index');
$routes->post('/login','User::autentikasi');
