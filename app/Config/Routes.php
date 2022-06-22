<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->addRedirect('/', 'Home');
$routes->get('/', 'KelolaPenduduk::index');
//$routes->get('surat', 'MasterSurat::index');
//$routes->get('pengurus', 'Pengurus::index');

//routes identitas desa
//$routes->get("kelola_identitas", "Identitas_Desa::kelola_identitas", ["namespace" => "App\Controllers\KelolaDesa"]);
//$routes->get("v_form", "Identitas_Desa::v_form", ["namespace" => "App\Controllers\KelolaDesa"]);


//routes kelola penduduk
//$routes->get("kelola_penduduk", "PendudukController::kelola_penduduk", ["namespace" => "App\Controllers\Penduduk"]);
//$routes->get("kelola_keluarga", "KeluargaController::kelola_keluarga", ["namespace" => "App\Controllers\Penduduk"]);
//$routes->get("kelola_biodata", "PendudukController::kelola_biodata", ["namespace" => "App\Controllers\Penduduk"]);
//$routes->get("kelola_rtm", "C_Penduduk::kelola_rtm", ["namespace" => "App\Controllers\Penduduk"]);


//routes kelola surat
//$routes->get("surat", "MasterSurat::surat", ["namespace" => "App\Controllers\KelolaSurat"]);
//$routes->get("surat_ket_kematian", "MasterSurat::surat_ket_kematian", ["namespace" => "App\Controllers\KelolaSurat"]);

$routes->group('surat', static function ($routes) {
    $routes->get('surat', 'MasterSurat\surat_ket_pengantar::index');
    $routes->get('surat', 'MasterSurat\surat_ket_penduduk::index');
});

//routes kelola bantuan
$routes->get("kelola_bantuan", "KelolaBantuan::kelola_bantuan", ["namespace" => "App\Controllers\Penduduk"]);

//router kelola pengaduan
$routes->get("kelola_pengaduan", "Pengaduan::kelola_pengaduan", ["namespace" => "App\Controllers\KelolaDesa"]);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
