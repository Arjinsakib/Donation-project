<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationPageController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeopleContactController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-page',[AboutController::class,'index'])->name('about');
Route::get('/blog-page',[BlogController::class,'index'])->name('blog');
Route::get('/donation-page',[DonationPageController::class,'donation'])->name('donation.page');
Route::get('/create-donation',[DonationController::class,'donationCreate'])->name('donation.create');
Route::post('/store-donation',[DonationController::class,'donationStore'])->name('donation.store');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact-store',[ContactController::class,'contactStore'])->name('contact.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,'admin'])->name('dashboard');
    Route::get('/history',[HistoryController::class,'history'])->name('donation.history');
    Route::get('/people-contact',[PeopleContactController::class,'peopleContact'])->name('people.contact');


});
