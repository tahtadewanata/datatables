<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\UsiasekolahController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DatadasarController;
use App\Http\Controllers\UserController;
use App\Models\Sdswasta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ItemController;
// use App\Http\Controllers\TotalusiasekolahController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// |--------------------------------------------------------------------------
// | OLD ROUTES
// |--------------------------------------------------------------------------

// Route::group(['middleware' => ['guest']], function () {

//     Route::get('/', 'HomeController@index')->name('home.index');

//     Route::get('data-usiasekolah', 'UsiasekolahController@index')->name('usiasekolah.index');

//     Route::get('/detailgender/{id}', 'HomeController@show')->name('datagender.show');
//     /**
//      * Register Routes
//      */
//     Route::get('/register', 'RegisterController@show')->name('register.show');
//     Route::post('/register', 'RegisterController@register')->name('register.perform');

//     /**
//      * Login Routes
//      */
//     Route::get('/login', 'LoginController@show')->name('login.show');
//     Route::post('/login', 'LoginController@login')->name('login.perform');
// });

// Route::group(['middleware' => ['auth']], function () {
//     /**
//      * Logout Routes
//      */
//     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//     //dashboard
//     Route::get('/dashboard', 'DashboardController@index')->name("dashboard");
//     //import-data-excel
//     Route::get('/import-excel', 'DatagenderanakController@index')->name("importgenderanak");
// });


// Route::get('/items', [ItemController::class, 'index'])->name('items.index');
// Route::get('/items/getData', [ItemController::class, 'getData'])->name('items.getData');

// Route::get('totalusiasekolah', [TotalusiasekolahController::class, 'index'])->name('totalusiasekolah.index');
// Route::get('totalusiasekolah/list', [TotalusiasekolahController::class, 'getTotalusiasekolah'])->name('totalusiasekolah.list');

Auth::routes();

Route::get('/test-sum', function () {
    $sds = Sdswasta::sum('jk_lk');

    return "Total jumlah: $sds";
});

Route::get('/', [LandingController::class, 'index'])->name('home.index');
Route::get('/teschart', [LandingController::class, 'chartTable'])->name('chartTable');
Route::get('/get-chart-table', [LandingController::class, 'getChartLanding'])->name('getChartTable');

//Data Penduduk Usia Sekolah
Route::get('/bidang-pendidikan', [LandingController::class, 'bidpendidikan'])->name('getPendidikantable');
Route::get('/sdswasta', [UsiasekolahController::class, 'getsdswasta'])->name('getsdswasta');
Route::get('/get-chart-sdswasta', [LandingController::class, 'getChartSdswasta'])->name('getchartsdswasta');
Route::get('/sdnegeri', [UsiasekolahController::class, 'getsdnegeri'])->name('getsdnegeri');
Route::get('/get-chart-sdnegeri', [LandingController::class, 'getChartSdnegeri'])->name('getChartSdnegeri');

//DATA DASAR
Route::get('/data-dasar', [DatadasarController::class, 'getDatadasar'])->name('getdasar');

Route::group(['middleware' => ['auth']], function () {

    //Dashboard
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    //Datatable
    Route::resource('/datatable', DatatableController::class);

    //Export Datatable
    Route::post('/getExport', [DatatableController::class, 'getExport'])->name('getExport');

    //ChartJS
    Route::resource('/chartjs', ChartController::class);
    Route::get('/getChart', [ChartController::class, 'getChart'])->name('getChart');

    //Crud Kecamatan
    Route::resource('/kecamatan', KecamatanController::class);

    //User
    Route::resource('/pengguna', UserController::class);
});
