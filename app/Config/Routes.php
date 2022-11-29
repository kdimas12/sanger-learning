<?php

namespace Config;

use App\Controllers\Login;
use App\Controllers\Register;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('courses', function ($routes) {
	$routes->get('/', 'Courses::index');
});
$routes->group('login', ['filter' => 'redirectAuth'], function ($routes) {
	$routes->get('/', 'Login::index');
	$routes->post('auth', 'Login::auth');
});
$routes->group('register', ['filter' => 'redirectAuth'], function ($routes) {
	$routes->get('/', 'Register::index');
	$routes->post('save', 'Register::save');
});
$routes->get('/logout', 'Logout::index');
// ['filter' => 'auth']
$routes->get('/contact', 'Contact::index');
$routes->group('profile', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'Profile::index');
	$routes->post('save', 'Profile::save');
});
$routes->group('pendaftaran-kelas', ['filter' => 'auth'], function ($routes) {
	$routes->get('/', 'PendaftaranKelas::index');
	$routes->get('(:any)', 'PendaftaranKelas::index/$1');
	$routes->post('daftar', 'PendaftaranKelas::daftar');
});

// admin
$routes->group('dashboard', function ($routes) {
	$routes->get('/', 'Dashboard::index');
	$routes->get('kelas', 'Dashboard::kelas');
	$routes->get('json', 'Dashboard::json');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
