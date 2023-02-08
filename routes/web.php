<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MemberController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('user/auth', [UserController::class, 'auth']);

// member
Route::controller(MemberController::class)->group(function (){
    route::get('/member', 'index')->middleware();
    route::post('/member/search', 'searchMember')->name('nama');
    route::get('/member/add', 'addMember');
    route::post('/member/create', 'createMember');
    // routs edit member
    route::get('/member/delete/{id}', 'deleteMember');
    route::get('/member/edit/{id}', 'editMember');
    route::post('/member/update/{id}', 'updateMember');

});
    // produks
    Route::controller(ProdukController::class)->group(function (){
    Route::get('/produk','index');
    route::post('/produk/search', 'searchProduk')->name('kd_produk');
    Route::get('/produk/add','addproduk');
    Route::post('/produk/create','createProduk');
    // routs edit produk
    route::get('/produk/delete/{id}', 'deleteProduk');
    route::get('/produk/edit/{id}', 'editProduk');
    route::post('/produk/update/{id}', 'updateProduk');

});
