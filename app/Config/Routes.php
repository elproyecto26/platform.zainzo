<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main\Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// CodeIgniter's route legacy for easter egg.
$routes->get('/codeigniter', 'CodeIgniter::index');

// 1. Main Routing
$routes->get('/', 'Main\Home::index');
$routes->get('/register', 'Main\Register::index');

// 2. API Routing
$routes->get('/api/accounting/coa-type', 'API\Accounting\COAType::get');
$routes->get('/api/accounting/coa', 'API\Accounting\COA::get');
$routes->post('/api/accounting/coa', 'API\Accounting\COA::post');

// 3. Accounting Routing
$routes->get('/accounting/coa', 'Accounting\COA::index');
$routes->get('/accounting/coa/data', 'Accounting\COA::data');
$routes->get('/accounting/coa/new', 'Accounting\COA::new');
$routes->get('/accounting/journal', 'Accounting\Journal::index');
$routes->get('/accounting/journal/data', 'Accounting\Journal::data');
$routes->get('/accounting/journal/entry', 'Accounting\Journal::entry');
$routes->get('/accounting/ledger', 'Accounting\Ledger::index');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
