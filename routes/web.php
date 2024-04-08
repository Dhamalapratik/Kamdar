<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\User\DataTableController;
use App\Http\Controllers\User\RatingController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Worker\ContactController;
use App\Http\Controllers\Worker\WorkerController;
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



// ===========================Normal Routes===========================

Route::get('/', [HomeController::class, 'displayLandingPage'])->name('display.landing.page');
Route::get('/home', [HomeController::class, 'index'])->name('home');



// ===========================User Routes===========================
Route::group(['prefix' => 'user', 'as' => 'user.','middleware' => ['auth', 'verified']], function () {

    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/workers',[UserController::class, 'index'])->name('home');
    Route::post('/contact/{id}', [HomeController::class,'sendContactForm'])->name('contact.send');
    // search
    Route::get('latest/worker', [UserController::class, 'latestWorker'])->name('latest.worker');
    Route::get('search/{term}', [SearchController::class, 'search'])->name('search');
    Route::get('search/place/{term}', [SearchController::class, 'placeSearch'])->name('search.place');
    Route::get('search/field/{term}', [SearchController::class, 'fieldSearch'])->name('search.field');

    // filter
    Route::get('filter/first', [SearchController::class, 'fieldFirst'])->name('filter.first');
    Route::get('filter/second', [SearchController::class, 'fieldSecond'])->name('filter.second');
    Route::get('filter/third', [SearchController::class, 'fieldThird'])->name('filter.third');





    // contact
    Route::get('contact/{id} ', [UserController::class,'displayContactForm'])->name('contact.form');
    Route::post('contact/message/{id}',[UserController::class,'storeMessage'])->name('contact.store');

    Route::get('contact/pending/{id}', [UserController::class,'pendingContact'])->name('contact.pending');
    Route::get('contact/booking', [UserController::class,'displayBooking'])->name('display.booking');
    Route::get('contact/booking/data',[DataTableController::class,'getBooking'])->name('contacts.booking.data');

    Route::get('contact/accepted', [UserController::class,'acceptedContact'])->name('contact.accepted');
    Route::get('contact/rejected', [UserController::class,'rejectedContact'])->name('contact.rejected');
    Route::get('contact/complete', [UserController::class,'completeContact'])->name('contact.complete');


    // rating

    Route::post('rating/{id}', [RatingController::class,'storeRatingForm'])->name('rating.store');
    // Route::post('/like-comment',[RatingController::class,'toggleLike'])->name('comment.like');




});


// ===========================Worker Routes===========================
Route::group(['prefix' => 'worker', 'as' => 'worker.','middleware' => ['auth', 'worker']], function () {

    Route::get('/home', [WorkerController::class, 'index'])->name('home');

    // Contact Message Routes
    Route::get('contact/booking',[WorkerController::class,'displayBooking'])->name('display.booking');
    Route::get('contact/booking/data',[ContactController::class,'getBookingContact'])->name('contacts.data');
    Route::get('contact/store/pending/{id}',[WorkerController::class,'acceptBooking'])->name('accept.booking');

    Route::get('contact/pending',[WorkerController::class,'displayPending'])->name('display.pending');
    Route::get('contact/pending/data',[ContactController::class,'getPendingContact'])->name('contacts.pending.data');
    Route::get('contact/store/accepted/{id}',[WorkerController::class,'acceptPending'])->name('accept.pending');

    Route::get('contact/store/rejected/{id}',[WorkerController::class,'acceptReject'])->name('accept.reject');
    Route::get('contact/store/declined/{id}',[WorkerController::class,'acceptDecline'])->name('accept.decline');

    Route::get('contact/accepted',[WorkerController::class,'displayAccepted'])->name('display.accepted');
    Route::get('contact/completed/data',[ContactController::class,'getCompletedContact'])->name('contacts.completed.data');

    Route::get('contact/rejected',[WorkerController::class,'displayReject'])->name('display.rejected');
    Route::get('contact/rejected/data',[ContactController::class,'getRejectedContact'])->name('contacts.rejected.data');

    Route::get('contact/declined',[WorkerController::class,'displayDecline'])->name('display.declined');
    Route::get('contact/declined/data',[ContactController::class,'getDeclinedContact'])->name('contacts.declined.data');

    Route::get('contact/single/{id}',[WorkerController::class,'displaySingleMessage'])->name('display.single.message');

    Route::get('/users', [WorkerController::class, 'displayUsers'])->name('users');




});



// ===========================Admin Routes===========================
Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['auth', 'admin']], function () {

});

require __DIR__.'/auth.php';
