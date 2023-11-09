<?php

use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home.index');



Route::get('refreshcaptcha', [CaptchaController::class, 'refreshCaptcha'])->name('refreshCaptcha');

//contact
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-us/save', [ContactController::class, 'save'])->name('contact.save');

//content

Route::get('/{slug}', [ContentController::class, 'show'])->name('content.show');


//email testg
Route::get('/mail-preview', function () {
    $invoice = App\Models\Contact::find(1);
    return new App\Mail\ContactUsMail($invoice);
});



//email testg
Route::get('/mail-preview-admin', function () {
    $invoice = App\Models\Contact::find(1);
    return new App\Mail\ContactUsReceived($invoice);
});
