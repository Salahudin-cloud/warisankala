<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// view 
$routes->get('/', 'Auth::index');
$routes->get('/register', 'Auth::registerView');

// process 
// auth process 
$routes->post('auth/process', 'Auth::processLogin');

// register process  
$routes->post('register/process', 'Auth::processRegister');
$routes->get('/logout', 'Auth::logout');



// ADMIN MENU 
$routes->get('/admin_dashboard', 'Admin::index');
$routes->get('/budaya' , 'Admin::budayaMenu');
$routes->get('/tambah_budaya', 'Admin::tambahBudaya');