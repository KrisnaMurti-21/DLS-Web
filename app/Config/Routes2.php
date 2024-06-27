<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'tamu']);
$routes->get('/jenis', 'Home::jenis', ['filter' => 'tamu']);
$routes->get('/manfaat', 'Home::manfaat', ['filter' => 'tamu']);
$routes->get('/register', 'Register::index', ['filter' => 'tamu']);
$routes->get('/login', 'Login::index', ['filter' => 'tamu']);
$routes->get('/tes', 'Uji::index', ['filter' => 'siswa']);
$routes->get('/regisguru', 'Register::regguru', ['filter' => 'tamu']);
$routes->get('/regissiswa', 'Register::regsiswa', ['filter' => 'tamu']);
$routes->post('/saveguru', 'Register::saveguru');
$routes->post('/savesiswa', 'Register::savesiswa');
$routes->get('/loginsiswa', 'Login::logsiswa', ['filter' => 'tamu']);
$routes->get('/loginguru', 'Login::logguru', ['filter' => 'tamu']);
$routes->post('/prosessiswa', 'Login::sesisiswa');
$routes->post('/prosesguru', 'Login::sesiguru');
$routes->get('/siswa', 'Siswa::index', ['filter' => 'siswa']);
$routes->get('/siswa/manfaat', 'Siswa::manfaat', ['filter' => 'siswa']);
$routes->get('/siswa/jenis', 'Siswa::jenis', ['filter' => 'siswa']);
$routes->get('/admin', 'Admin::index', ['filter' => 'guru']);
$routes->get('/admin/datasiswa', 'Admin::datasiswa', ['filter' => 'guru']);
$routes->get('/admin/hasiltes', 'Admin::hasiltes', ['filter' => 'guru']);
$routes->post('/admin/tambah', 'Admin::tambah');
$routes->post('/hitung', 'Hitung::index');
$routes->post('/uji/ceks', 'Uji::ceks');
$routes->get('/uji', 'Uji::uji');
$routes->post('/uji/save', 'Uji::save');
$routes->get('/uji1', 'Uji::uji1', ['filter' => 'siswa']);
$routes->get('/uji2', 'Uji::uji2', ['filter' => 'siswa']);
$routes->get('/uji3', 'Uji::uji3', ['filter' => 'siswa']);
$routes->get('/uji4', 'Uji::uji4', ['filter' => 'siswa']);
$routes->post('/uji/simpan1', 'Uji::simpan1');
$routes->post('/uji/simpan2', 'Uji::simpan2');
$routes->post('/uji/simpan3', 'Uji::simpan3');
$routes->post('/uji/simpan4', 'Uji::simpan4');
$routes->get('/siswa/hasil', 'Siswa::hasil', ['filter' => 'siswa']);
$routes->get('logout', 'Login::logout');
$routes->get('/siswa/profile', 'Siswa::profile', ['filter' => 'siswa']);
$routes->post('/siswa/update', 'Siswa::update');
$routes->get('/admin/profile', 'Admin::profile', ['filter' => 'guru']);
$routes->post('/admin/update', 'Admin::update');
$routes->post('admin/editSiswa/(:num)', 'Admin::editSiswa/$1');
$routes->get('admin/removeSiswa/(:num)', 'Admin::removeSiswa/$1');




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
