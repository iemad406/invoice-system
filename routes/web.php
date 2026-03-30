<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ActivationUser\ActivationController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Invoice\UploadInvoiceController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\LogOutController;

Route::get('/', function () {
    return view('index');
})->name('mainPage');
Route::view('/register','auth.register')->name('register');
Route::post('/registerNewUser',[RegisterController::class,'registerNewUser'])->name('user.register');
Route::get('/activate',[ActivationController::class,'activate_user']);
Route::view('/help','help.helpPage')->name('issuePage');
Route::view('/contactUS','contactUs.contact_us')->name('contactUS');
Route::post('/contact_us',[ContactController::class,'mailUS'])->name('guess.contactUS');
Route::view('/invoice_page','invoicePage')->name('invoice')->middleware('auth_user');
Route::post('/upload_invoice',[UploadInvoiceController::class,'uploadFile'])->name('uploadInvoice')->middleware('auth_user');
Route::middleware('web')->group(function () {
    Route::view('/login','auth.login')->name('login');
    Route::post('/user_login',[UserLoginController::class,'login'])
     ->name('user.login'); 
});
Route::view('/about','about'); 
Route::post('/logout',[LogOutController::class,'logout'])->name('logout');   