<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSupplierController;
use App\Http\Controllers\DataSupirController;
use App\Http\Controllers\DataAgenController;
use App\Http\Controllers\DataSemenController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DataMobilController;
use App\Http\Controllers\SalesOrderController;
use App\Http\Controllers\DeliveryOrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/datadashboard', [DataDashboardController::class, 'index']);
Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

// Rute Data Semen
Route::get('/datasemen', [DataSemenController::class, 'index']);
Route::get('/datasemen/refreshropeoq', [DataSemenController::class, 'refreshRopEoq']);

Route::post('/tambahdatasemen', [DataSemenController::class, 'store']);
Route::get('/hapusdatasemen/{id}', [DataSemenController::class, 'destroy']);
Route::post('/editdatasemen', [DataSemenController::class, 'update']);


// Rute Data Supplier
Route::get('/datasupplier', [DataSupplierController::class, 'index']);
Route::post('/tambahdatasupplier', [DataSupplierController::class, 'store']);
Route::get('/hapusdatasupplier/{id}', [DataSupplierController::class, 'destroy']);
Route::post('/editdatasupplier', [DataSupplierController::class, 'update']);

// Rute Data supir
Route::get('/datasupir', [DataSupirController::class, 'index']);
Route::get('/datasupir/cari', [DataSupirController::class, 'cari']);
Route::post('/tambahdatasupir', [DataSupirController::class, 'store']);
Route::get('/hapusdatasupir/{id}', [DataSupirController::class, 'destroy']);
Route::post('/editdatasupir', [DataSupirController::class, 'update']);
Route::post('/supir/import_excel', [DataSupirController::class, 'import_excel']);


// Rute Data Mobil
Route::get('/datamobil', [DataMobilController::class, 'index']);
Route::get('/datamobil/cari', [DataMobilController::class, 'cari']);
Route::post('/tambahdatamobil', [DataMobilController::class, 'store']);
Route::get('/hapusdatamobil/{id}', [DataMobilController::class, 'destroy']);
Route::post('/editdatamobil', [DataMobilController::class, 'update']);
Route::post('/mobil/import_excel', [DataMobilController::class, 'import_excel']);


// Rute Data Agen
Route::get('/dataagen', [DataAgenController::class, 'index']);
Route::get('/dataagen/cari', [DataAgenController::class, 'cari']);
Route::post('/tambahdataagen', [DataAgenController::class, 'store']);
Route::get('/hapusdataagen/{id}', [DataAgenController::class, 'destroy']);
Route::post('/editdataagen', [DataAgenController::class, 'update']);
Route::post('/agen/import_excel', [DataAgenController::class, 'import_excel']);


// Rute Data user
Route::get('/datausers', [DataUserController::class, 'index']);
Route::post('/tambahdatauser', [DataUserController::class, 'store']);
Route::get('/hapusdatauser/{id}', [DataUserController::class, 'destroy']);
Route::post('/editdatauser', [DataUserController::class, 'update']);


// Rute Data SO
Route::get('/distribusisalesorder',  [SalesOrderController::class, 'index']);
Route::any('/distribusisalesorder/cari', [SalesOrderController::class, 'cari']);
Route::post('/tambahdataso', [SalesOrderController::class, 'store']);
Route::post('/editdataso', [SalesOrderController::class, 'update']);
Route::get('/hapusdataso/{id}',  [SalesOrderController::class, 'destroy']);
Route::post('/salesorder/import_excel', [SalesOrderController::class, 'import_excel']);
Route::get('/salesorder/export_excel', [SalesOrderController::class, 'export']);
Route::get('/salesorder/truncate', [SalesOrderController::class, 'truncateData']);
Route::post('/salesorder/preview_print', [SalesOrderController::class, 'preview_pdf']);
Route::get('/salesorder/pdf_download', [SalesOrderController::class, 'cetak_pdf']);

// Rute Data DO
Route::get('/distribusideliveryorder',  [DeliveryOrderController::class, 'index']);
Route::any('/distribusideliveryorder/cari', [DeliveryOrderController::class, 'cari']);
Route::post('/tambahdatado', [DeliveryOrderController::class, 'store']);
Route::post('/editdatado', [DeliveryOrderController::class, 'update']);
Route::get('/hapusdatado/{id}',  [DeliveryOrderController::class, 'destroy']);
Route::post('/deliveryorder/import_excel', [DeliveryOrderController::class, 'import_excel']);
Route::get('/deliveryorder/export_excel', [DeliveryOrderController::class, 'export']);
Route::get('/deliveryorder/truncate', [DeliveryOrderController::class, 'truncateData']);
Route::post('/deliveryorder/preview_print', [DeliveryOrderController::class, 'preview_pdf']);


// Rute Data Login
Route::get('/login', function () {
    return view('login');
});
