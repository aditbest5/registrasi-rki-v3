<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Member\UserProfileController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WilayahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('register')->group(function () {
    Route::post('/rki/primkop', function () {
        return "OK";
    });
    Route::post("/rki/update-koperasi/{id_koperasi}", [KoperasiController::class, 'update_koperasi_rki']);
    Route::post('/anggota/insert-anggota', [AnggotaController::class, 'insert_anggota']);
    Route::post('/anggota/update-anggota/{id_anggota}', [AnggotaController::class, 'update_anggota']);
    Route::post('/anggota/update-insert-anggota/{id_anggota}', [AnggotaController::class, 'update_insert_anggota']);
    Route::post('/koperasi/insert-koperasi/{id_koperasi}/{tingkat}', [KoperasiController::class, 'insert_koperasi']);
    Route::post('/data/koperasi/{id_koperasi}/{tingkat}', [KoperasiController::class, 'insert_data_koperasi']);
    Route::post('/data/anggota/{id_koperasi}', [AnggotaController::class, 'insert_data_anggota']);

    Route::post('/koperasi/insert-induk', [KoperasiController::class, 'insert_inkop']);
})->name('register');

Route::get('/koperasi/verifikasi-otp/{otp}/{nis}', [KoperasiController::class, 'verifikasi_otp']);
Route::get('/anggota/verifikasi-otp/{otp}/{nis}', [AnggotaController::class, 'verifikasi_otp']);

Route::prefix('wilayah')->group(function () {
    Route::get('/provinsi', [WilayahController::class, 'province']);
    Route::get('/kota/{id_provinsi}', [WilayahController::class, 'city']);
    Route::get('/kecamatan/{id_kota}', [WilayahController::class, 'district']);
    Route::get('/kelurahan/{id_kecamatan}', [WilayahController::class, 'subdistrict']);
})->name('wilayah');
Route::post('/approve/send-mail/anggota/{id}', [MailController::class, 'sendMailApproveAnggota']);
Route::post('/approve/send-mail/koperasi/{id}', [MailController::class, 'sendMailApproveKoperasi']);
Route::delete('/reject/send-mail/anggota/{id}', [MailController::class, 'sendMailRejectAnggota']);
Route::delete('/reject/send-mail/koperasi/{id}', [MailController::class, 'sendMailRejectKoperasi']);

// ============ Produk ================
Route::prefix('products')->group(function () {
    Route::get('/get-products/{id}', [ProductController::class, 'get_product']);
    Route::get('/detail-products/{id_koperasi}/{id_produk}', [ProductController::class, 'detail_product']);
    Route::post('/insert-product/{id}', [ProductController::class, 'insert']);
    Route::post('/insert-kategori/{id}', [ProductCategoryController::class, 'store']);
    Route::delete('/delete-kategori/{id}', [ProductCategoryController::class, 'destroy']);
    Route::delete('/delete-produk/{id}', [ProductController::class, 'destroy']);
    Route::patch('/update-produk/{id}', [ProductController::class, 'update']);
    Route::patch('/add-stock/{id}', [ProductController::class, 'add_stock']);
})->name('products');
// ============ End Produk ================

// ============ POS ================
Route::prefix('pos')->group(function () {
    Route::post('/checkout', [PosController::class, 'insert_pos']);
    Route::delete('/cancel/{order_id}', [PosController::class, 'destroy']);
    Route::post('/payment', [PosController::class, 'insert_payment']);
    Route::post('/xendit/callback', [PosController::class, 'handleXenditCallback']);

})->name('pos');
// ============ End POS ================

Route::get('/anggota/list/{no_anggota}/{id_koperasi}', [AnggotaController::class, 'show']);
// ============ Pengajuan Registrasi ================
Route::post('/approve/send-mail/pengajuan/{id}', [MailController::class, 'sendMailApprovePengajuan']);
Route::delete('/reject/send-mail/pengajuan/{id}', [MailController::class, 'sendMailRejectPengajuan']);
// ============ End Pengajuan Registrasi ================



// ====================================================================================================================================
// Member Routing API
// ====================================================================================================================================
Route::prefix('member')->name('member.')->group(function () {
    // User Profile
    Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
    Route::post('/user-profile/update', [UserProfileController::class, 'update'])->name('update-user-profile');
});
// ====================================================================================================================================
// End Member Routing API
// ====================================================================================================================================
